<?php

use App\Models\Plan;

class UtilsHelper
{
    /**
     * Get status class name from 'Get A Free Demo' status to display on front-end
     * @param $status
     * @return string
     */
	public static function getGafdStatusClass($status = 'pending') {
        switch ($status) {
            case 'accepted':
                $statusClass = 'bg-info';
                break;
            case 'rejected':
                $statusClass = 'bg-danger';
                break;
            case 'canceled':
                $statusClass = 'bg-warning';
                break;
            case 'completed':
                $statusClass = 'bg-success';
                break;
            default:
                $statusClass = 'bg-primary';
        }
        
        return $statusClass;
	}

    /**
     * Get type background class name from plan type to display on front-end
     * @param $type
     * @return string
     */
	public static function getPlanTypeBGClass($type = 'monthly') {
        switch ($type) {
            case 'yearly':
                $typeClass = 'bg-info';
                break;
            case 'custom':
                $typeClass = 'bg-danger';
                break;
            default:
                $typeClass = 'bg-primary';
        }
        
        return $typeClass;
	}

    /**
     * Get type text class name from plan type to display on front-end
     * @param $type
     * @return string
     */
	public static function getPlanTypeTextClass($type = 'monthly') {
        switch ($type) {
            case 'yearly':
                $typeClass = 'text-info';
                break;
            case 'custom':
                $typeClass = 'text-danger';
                break;
            default:
                $typeClass = 'text-primary';
        }
        
        return $typeClass;
	}

    /**
     * Get type text from plan type to display on front-end
     * @param $type
     * @return string
     */
	public static function getPlanTypeText($type = 'custom') {
        switch ($type) {
            case 'monthly':
                $typeText = 'month';
                break;
            case 'yearly':
                $typeText = 'Year';
                break;    
            default:
                $typeText = 'Custom';
        }
        
        return $typeText;
	}

    /**
     * Get plans
     * @param 
     * @return Collection
     */
    public static function getAllPlans() {
        return Plan::get()->all();
    }
}