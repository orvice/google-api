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

class Profile extends Model
{
    public $defaultPage;
    public $kind;
    public $excludeQueryParameters;
    public $name;
    public $created;
    public $webPropertyId;
    public $updated;
    public $siteSearchQueryParameters;
    public $currency;
    public $internalWebPropertyId;
    protected $__childLinkType = 'GoogleApi\Service\Analytics\ProfileChildLink';
    protected $__childLinkDataType = '';
    public $childLink;
    public $timezone;
    public $siteSearchCategoryParameters;
    protected $__parentLinkType = 'GoogleApi\Service\Analytics\ProfileParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $id;
    public $selfLink;
    public $accountId;

    public function setDefaultPage($defaultPage)
    {
        $this->defaultPage = $defaultPage;
    }

    public function getDefaultPage()
    {
        return $this->defaultPage;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setExcludeQueryParameters($excludeQueryParameters)
    {
        $this->excludeQueryParameters = $excludeQueryParameters;
    }

    public function getExcludeQueryParameters()
    {
        return $this->excludeQueryParameters;
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

    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setSiteSearchQueryParameters($siteSearchQueryParameters)
    {
        $this->siteSearchQueryParameters = $siteSearchQueryParameters;
    }

    public function getSiteSearchQueryParameters()
    {
        return $this->siteSearchQueryParameters;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
    }

    public function setChildLink(ProfileChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    public function getChildLink()
    {
        return $this->childLink;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setSiteSearchCategoryParameters($siteSearchCategoryParameters)
    {
        $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
    }

    public function getSiteSearchCategoryParameters()
    {
        return $this->siteSearchCategoryParameters;
    }

    public function setParentLink(ProfileParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    public function getParentLink()
    {
        return $this->parentLink;
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
