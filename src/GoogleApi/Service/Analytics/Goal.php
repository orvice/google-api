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

class Goal extends Model
{
    public $kind;
    protected $__visitTimeOnSiteDetailsType = 'GoogleApi\Service\Analytics\GoalVisitTimeOnSiteDetails';
    protected $__visitTimeOnSiteDetailsDataType = '';
    public $visitTimeOnSiteDetails;
    public $name;
    public $created;
    protected $__urlDestinationDetailsType = 'GoogleApi\Service\Analytics\GoalUrlDestinationDetails';
    protected $__urlDestinationDetailsDataType = '';
    public $urlDestinationDetails;
    public $updated;
    public $value;
    protected $__visitNumPagesDetailsType = 'GoogleApi\Service\Analytics\GoalVisitNumPagesDetails';
    protected $__visitNumPagesDetailsDataType = '';
    public $visitNumPagesDetails;
    public $internalWebPropertyId;
    protected $__eventDetailsType = 'GoogleApi\Service\Analytics\GoalEventDetails';
    protected $__eventDetailsDataType = '';
    public $eventDetails;
    public $webPropertyId;
    public $active;
    public $profileId;
    protected $__parentLinkType = 'GoogleApi\Service\Analytics\GoalParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $type;
    public $id;
    public $selfLink;
    public $accountId;

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setVisitTimeOnSiteDetails(GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails)
    {
        $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
    }

    public function getVisitTimeOnSiteDetails()
    {
        return $this->visitTimeOnSiteDetails;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setUrlDestinationDetails(GoalUrlDestinationDetails $urlDestinationDetails)
    {
        $this->urlDestinationDetails = $urlDestinationDetails;
    }

    public function getUrlDestinationDetails()
    {
        return $this->urlDestinationDetails;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setVisitNumPagesDetails(GoalVisitNumPagesDetails $visitNumPagesDetails)
    {
        $this->visitNumPagesDetails = $visitNumPagesDetails;
    }

    public function getVisitNumPagesDetails()
    {
        return $this->visitNumPagesDetails;
    }

    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
    }

    public function setEventDetails(GoalEventDetails $eventDetails)
    {
        $this->eventDetails = $eventDetails;
    }

    public function getEventDetails()
    {
        return $this->eventDetails;
    }

    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    public function getProfileId()
    {
        return $this->profileId;
    }

    public function setParentLink(GoalParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    public function getParentLink()
    {
        return $this->parentLink;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }
}
