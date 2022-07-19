(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /* Navigation hover dropdown */
  on('mouseenter', '.nav-item.dropdown', function (e) {
    const toggle = e.target.querySelector('.dropdown-toggle');
    const menu = e.target.querySelector('.dropdown-menu');
    toggle.classList.add('show');
    toggle.setAttribute('aria-expanded', true);
    menu.classList.add('show');
    toggle.setAttribute('data-bs-popper', 'static');
  }, true)

  on('mouseleave', '.nav-item.dropdown', function (e) {
    const toggle = e.target.querySelector('.dropdown-toggle');
    const menu = e.target.querySelector('.dropdown-menu');
    toggle.classList.remove('show');
    toggle.setAttribute('aria-expanded', false);
    menu.classList.remove('show');
    toggle.removeAttribute('data-bs-popper');
  }, true)

  /* Home pillar tab */
  let opening = false;

  on('hide.bs.collapse', '.accordion-collapse', function (e) {
    if (!opening) {
      e.preventDefault();
      e.stopPropagation();
    } else {
      opening = false;
    }
  }, true)

  on('show.bs.collapse', '.accordion-collapse', function (e) {
    const imgs = select('.pillar-tab-image', true);
    imgs.forEach(function (img) {
      img.classList.add('tab-pane');
      if (img.classList.contains(e.target.id)) {
        img.classList.remove('tab-pane');
      }
    });
    opening = true;
  }, true)

  /* Tab pillar */
  const getCurrentTab = (targetTabContainer, tabMenuContainer, tabContentContainer) => {
    const currentTabIndex = targetTabContainer.getAttribute('data-current');
    const currentTabMenu = tabMenuContainer.querySelector(`[data-tab="${currentTabIndex}"]`);
    const tabContentId = currentTabMenu.getAttribute('data-bs-target');
    const currentTabContent = tabContentContainer.querySelector(`#${tabContentId}`);
    return {
      currentTabMenu,
      currentTabContent
    }
  }

  const getNextTab = (tabMenuContainer, tabContentContainer, currentTabMenu, currentTabContent) => {
    let nextTabMenu = tabMenuContainer.firstElementChild;
    let nextTabContent = tabContentContainer.firstElementChild;
    if (currentTabMenu !== tabMenuContainer.lastElementChild) {
      nextTabMenu = currentTabMenu.nextElementSibling;
      nextTabContent = currentTabContent.nextElementSibling;
    }
    return {
      nextTabMenu,
      nextTabContent
    }
  }

  const nextTab = (index) => {
    const targetTabContainer = tabs[index];
    const tabMenuContainer = targetTabContainer.querySelector('.tabs-menu');
    const tabContentContainer = targetTabContainer.querySelector('.tabs-content');
    const { currentTabMenu, currentTabContent } = getCurrentTab(targetTabContainer, tabMenuContainer, tabContentContainer);
    const { nextTabMenu, nextTabContent } = getNextTab(tabMenuContainer, tabContentContainer, currentTabMenu, currentTabContent);
    moveTab(targetTabContainer, currentTabMenu, currentTabContent, nextTabMenu, nextTabContent)
  };

  const moveTab = (targetTabContainer, currentTabMenu, currentTabContent, nextTabMenu, nextTabContent) => {
    // Update tab menu
    const currentLoader = currentTabMenu.querySelector('.service-loader-bar-main');
    const nextLoader = nextTabMenu.querySelector('.service-loader-bar-main');
    currentLoader.style.transitionDuration = `${targetTabContainer.transitionDurationOut}ms`;
    nextLoader.style.transitionDuration = `${targetTabContainer.transitionDurationIn}ms`;
    const nextTab = nextTabMenu.getAttribute('data-tab');
    targetTabContainer.setAttribute('data-current', nextTab);
    currentTabMenu.classList.remove('current');
    currentTabMenu.setAttribute('aria-selected', false);
    nextTabMenu.classList.add('current');
    nextTabMenu.setAttribute('aria-selected', true);
    // Update tab content
    currentTabContent.classList.remove('tab-active');
    nextTabContent.classList.add('tab-active');
  };

  on('click', '.dark-pillar-tab-link > .am-tab-heading', function (e) {
    const selectedTabMenu = e.target.parentNode;
    const selectedTabIndex = selectedTabMenu.getAttribute('data-tab');
    const selectedTabContainer = selectedTabMenu.parentNode.parentNode;
    const tabConatinerIndex = tabs.findIndex(tab => tab === selectedTabContainer);
    clearInterval(tabTimers[tabConatinerIndex]);
    tabTimers[tabConatinerIndex] = setInterval(() => nextTab(tabConatinerIndex), selectedTabContainer.transitionDurationIn)
    const currentTabIndex = selectedTabContainer.getAttribute('data-current');
    if (selectedTabIndex === currentTabIndex) {
      return;
    }
    const tabMenuContainer = selectedTabContainer.querySelector('.tabs-menu');
    const tabContentContainer = selectedTabContainer.querySelector('.tabs-content');
    const tabContentId = selectedTabMenu.getAttribute('data-bs-target');
    const selectedTabContent = tabContentContainer.querySelector(`#${tabContentId}`);
    const { currentTabMenu, currentTabContent } = getCurrentTab(selectedTabContainer, tabMenuContainer, tabContentContainer);
    moveTab(selectedTabContainer, currentTabMenu, currentTabContent, selectedTabMenu, selectedTabContent)
  }, true);

  // Theme toggle
  on('input', '#theme-toggle', function (e) {
    console.log(e);
    if(e.target.checked === true){
        document.body.classList.add('dark-mode');
        localStorage.setItem('data-theme','dark');
    }
    else if(e.target.checked === false){
        document.body.classList.remove('dark-mode');
        localStorage.setItem('data-theme','light');
    }
  }, true);

  let tabTimers = [];
  let tabs;

  window.addEventListener('load', () => {
    // Tab container with timer antimation
    tabs = select('.am-pillar-tab-component', true);
    tabs.forEach((tab, index) => {
      const transitionTiming = tab.getAttribute('data-easing') || 'ease';
      const transitionDurationIn = tab.getAttribute('data-duration-in') || 3000;
      const transitionDurationOut = tab.getAttribute('data-duration-out') || 1000;
      tab.transitionDurationIn = transitionDurationIn;
      tab.transitionDurationOut = transitionDurationOut;
      const loaderBars = tab.querySelectorAll('.service-loader-bar-main');
      loaderBars.forEach(loaderBar => {
        loaderBar.style.transitionTimingFunction = `${transitionTiming}`;
        loaderBar.style.transitionDuration = `${transitionDurationIn}ms`;
      })
      const currentTabIndex = tab.getAttribute('data-current');
      const tabMenuContainer = tab.querySelector('.tabs-menu');
      const tabContentContainer = tab.querySelector('.tabs-content');
      const currentTabMenu = tabMenuContainer.querySelector(`[data-tab="${currentTabIndex}"]`);
      const tabContentId = currentTabMenu.getAttribute('data-bs-target');
      const currentTabContent = tabContentContainer.querySelector(`#${tabContentId}`);
      currentTabMenu.classList.add('current');
      currentTabMenu.setAttribute('aria-selected', true);
      currentTabContent.classList.add('tab-active');
      const timer = setInterval(() => nextTab(index), transitionDurationIn)
      tabTimers.push(timer);
    });
    // Light/Dark Theme initialize
    const theme = localStorage.getItem('data-theme');
    if (theme === 'light') {
      document.body.classList.add('light-mode');
    } else if(theme === '') {
      document.body.classList.add('light-mode');
    } else if(theme === 'dark') {
      document.body.classList.add('dark-mode');
      document.getElementById("theme-toggle").checked = true;
    }
  });
})()
