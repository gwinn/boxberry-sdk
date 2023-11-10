<?php

namespace Gwinn\Boxberry\Model\Response\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class WorkShedule.
 *
 * @category Models
 *

 */
trait WorkShedule
{
    /**
     * Расписание работы строкой.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkShedule")
     */
    public $workShedule;

    /**
     * Понедельник, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkMoBegin")
     */
    public $workMoBegin;

    /**
     * Понедельник, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkMoEnd")
     */
    public $workMoEnd;

    /**
     * Вторник, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkTuBegin")
     */
    public $workTuBegin;

    /**
     * Вторник, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkTuEnd")
     */
    public $workTuEnd;

    /**
     * Среда, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkWeBegin")
     */
    public $workWeBegin;

    /**
     * Среда, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkWeEnd")
     */
    public $workWeEnd;

    /**
     * Четверг, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkThBegin")
     */
    public $workThBegin;

    /**
     * Четверг, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkThEnd")
     */
    public $workThEnd;

    /**
     * Пятница, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkFrBegin")
     */
    public $workFrBegin;

    /**
     * Пятница, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkFrEnd")
     */
    public $workFrEnd;

    /**
     * Суббота, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSaBegin")
     */
    public $workSaBegin;

    /**
     * Суббота, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSaEnd")
     */
    public $workSaEnd;

    /**
     * Воскресенье, начало рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSuBegin")
     */
    public $workSuBegin;

    /**
     * Воскресенье, конец рабочего дня.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkSuEnd")
     */
    public $workSuEnd;

    /**
     * Понедельник, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchMoBegin")
     */
    public $lunchMoBegin;

    /**
     * Понедельник, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchMoEnd")
     */
    public $lunchMoEnd;

    /**
     * Вторник, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchTuBegin")
     */
    public $lunchTuBegin;

    /**
     * Вторник, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchTuEnd")
     */
    public $lunchTuEnd;

    /**
     * Среда, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchWeBegin")
     */
    public $lunchWeBegin;

    /**
     * Среда, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchWeEnd")
     */
    public $lunchWeEnd;

    /**
     * Четверг, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchThBegin")
     */
    public $lunchThBegin;

    /**
     * Четверг, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchThEnd")
     */
    public $lunchThEnd;

    /**
     * Пятница, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchFrBegin")
     */
    public $lunchFrBegin;

    /**
     * Пятница, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchFrEnd")
     */
    public $lunchFrEnd;

    /**
     * Суббота, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSaBegin")
     */
    public $lunchSaBegin;

    /**
     * Суббота, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSaEnd")
     */
    public $lunchSaEnd;

    /**
     * Воскресенье, обед, начало.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSuBegin")
     */
    public $lunchSuBegin;

    /**
     * Воскресенье, обед, конец.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LunchSuEnd")
     */
    public $lunchSuEnd;
}
