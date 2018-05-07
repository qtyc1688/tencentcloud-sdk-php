<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取云数据库实例ID
 * @method void setInstanceId(string $instanceId) 设置云数据库实例ID
 * @method array getTimeRanges() 获取维护时间窗口
 * @method void setTimeRanges(array $timeRanges) 设置维护时间窗口
 * @method array getWeekdays() 获取星期几，可能的取值为：monday, tuesday, wednesday, thursday, friday, saturday, sunday
 * @method void setWeekdays(array $weekdays) 设置星期几，可能的取值为：monday, tuesday, wednesday, thursday, friday, saturday, sunday
 */

/**
 *ModifyTimeWindow请求参数结构体
 */
class ModifyTimeWindowRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var array 维护时间窗口
     */
    public $timeRanges;

    /**
     * @var array 星期几，可能的取值为：monday, tuesday, wednesday, thursday, friday, saturday, sunday
     */
    public $weekdays;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param array $timeRanges 维护时间窗口
     * @param array $weekdays 星期几，可能的取值为：monday, tuesday, wednesday, thursday, friday, saturday, sunday
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("TimeRanges",$param) and $param["TimeRanges"] !== null) {
            $this->timeRanges = $param["TimeRanges"];
        }

        if (array_key_exists("Weekdays",$param) and $param["Weekdays"] !== null) {
            $this->weekdays = $param["Weekdays"];
        }
    }
}