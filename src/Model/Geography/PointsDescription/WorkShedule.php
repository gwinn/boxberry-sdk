<?php

namespace Gwinn\Boxberry\Model\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class WorkShedule
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
trait WorkShedule
{
    /**
     * Расписание работы строкой
     *
     * @var string $workShedule
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkShedule")
     *
     */
    public $workShedule;

    /**
     * Понедельник, начало рабочего дня
     *
     * @var string $workMoBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkMoBegin")
     *
     */
    public $workMoBegin;

    /**
     * Понедельник, конец рабочего дня
     *
     * @var string $workMoEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkMoEnd")
     *
     */
    public $workMoEnd;

    /**
     * Вторник, начало рабочего дня
     *
     * @var string $workTuBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkTuBegin")
     *
     */
    public $workTuBegin;

    /**
     * Вторник, конец рабочего дня
     *
     * @var string $workTuEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkTuEnd")
     *
     */
    public $workTuEnd;

    /**
     * Среда, начало рабочего дня
     *
     * @var string $workWeBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkWeBegin")
     *
     */
    public $workWeBegin;

    /**
     * Среда, конец рабочего дня
     *
     * @var string $workWeEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkWeEnd")
     *
     */
    public $workWeEnd;

    /**
     * Четверг, начало рабочего дня
     *
     * @var string $workThBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkThBegin")
     *
     */
    public $workThBegin;

    /**
     * Четверг, конец рабочего дня
     *
     * @var string $workThEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkThEnd")
     *
     */
    public $workThEnd;

    /**
     * Пятница, начало рабочего дня
     *
     * @var string $workFrBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkFrBegin")
     *
     */
    public $workFrBegin;

    /**
     * Пятница, конец рабочего дня
     *
     * @var string $workFrEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkFrEnd")
     *
     */
    public $workFrEnd;

    /**
     * Суббота, начало рабочего дня
     *
     * @var string $workSaBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSaBegin")
     *
     */
    public $workSaBegin;

    /**
     * Суббота, конец рабочего дня
     *
     * @var string $workSaEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSaEnd")
     *
     */
    public $workSaEnd;

    /**
     * Воскресенье, начало рабочего дня
     *
     * @var string $workSuBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSuBegin")
     *
     */
    public $workSuBegin;

    /**
     * Воскресенье, конец рабочего дня
     *
     * @var string $workSuEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSuEnd")
     *
     */
    public $workSuEnd;

    /**
     * Понедельник, обед, начало
     *
     * @var string $lunchMoBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchMoBegin")
     *
     */
    public $lunchMoBegin;

    /**
     * Понедельник, обед, конец
     *
     * @var string $lunchMoEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchMoEnd")
     *
     */
    public $lunchMoEnd;

    /**
     * Вторник, обед, начало
     *
     * @var string $lunchTuBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchTuBegin")
     *
     */
    public $lunchTuBegin;

    /**
     * Вторник, обед, конец
     *
     * @var string $lunchTuEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchTuEnd")
     *
     */
    public $lunchTuEnd;

    /**
     * Среда, обед, начало
     *
     * @var string $lunchWeBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchWeBegin")
     *
     */
    public $lunchWeBegin;

    /**
     * Среда, обед, конец
     *
     * @var string $lunchWeEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchWeEnd")
     *
     */
    public $lunchWeEnd;

    /**
     * Четверг, обед, начало
     *
     * @var string $lunchThBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchThBegin")
     *
     */
    public $lunchThBegin;

    /**
     * Четверг, обед, конец
     *
     * @var string $lunchThEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchThEnd")
     *
     */
    public $lunchThEnd;

    /**
     * Пятница, обед, начало
     *
     * @var string $lunchFrBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchFrBegin")
     *
     */
    public $lunchFrBegin;

    /**
     * Пятница, обед, конец
     *
     * @var string $lunchFrEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchFrEnd")
     *
     */
    public $lunchFrEnd;

    /**
     * Суббота, обед, начало
     *
     * @var string $lunchSaBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSaBegin")
     *
     */
    public $lunchSaBegin;

    /**
     * Суббота, обед, конец
     *
     * @var string $lunchSaEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSaEnd")
     *
     */
    public $lunchSaEnd;

    /**
     * Воскресенье, обед, начало
     *
     * @var string $lunchSuBegin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSuBegin")
     *
     */
    public $lunchSuBegin;

    /**
     * Воскресенье, обед, конец
     *
     * @var string $lunchSuEnd
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSuEnd")
     *
     */
    public $lunchSuEnd;
}
