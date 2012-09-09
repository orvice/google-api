<?php

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GoogleApi\Service\Analytics;

use GoogleApi\Service\Model;

class GoalEventDetails extends Model
{
    protected $__eventConditionsType = 'GoogleApi\Service\Analytics\GoalEventDetailsEventConditions';
    protected $__eventConditionsDataType = 'array';
    public $eventConditions;
    public $useEventValue;

    public function setEventConditions( /* array(GoalEventDetailsEventConditions) */
        $eventConditions)
    {
        $this->assertIsArray($eventConditions, 'GoalEventDetailsEventConditions', __METHOD__);
        $this->eventConditions = $eventConditions;
    }

    public function getEventConditions()
    {
        return $this->eventConditions;
    }

    public function setUseEventValue($useEventValue)
    {
        $this->useEventValue = $useEventValue;
    }

    public function getUseEventValue()
    {
        return $this->useEventValue;
    }
}
