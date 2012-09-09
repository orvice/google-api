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

class GaData extends Model
{
    public $kind;
    public $rows;
    public $containsSampledData;
    public $totalResults;
    public $itemsPerPage;
    public $totalsForAllResults;
    public $nextLink;
    public $id;
    protected $__queryType = 'GoogleApi\Service\Analytics\GaDataQuery';
    protected $__queryDataType = '';
    public $query;
    public $previousLink;
    protected $__profileInfoType = 'GoogleApi\Service\Analytics\GaDataProfileInfo';
    protected $__profileInfoDataType = '';
    public $profileInfo;
    protected $__columnHeadersType = 'GoogleApi\Service\Analytics\GaDataColumnHeaders';
    protected $__columnHeadersDataType = 'array';
    public $columnHeaders;
    public $selfLink;

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setRows( /* array(string) */
        $rows)
    {
        $this->assertIsArray($rows, 'string', __METHOD__);
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setContainsSampledData($containsSampledData)
    {
        $this->containsSampledData = $containsSampledData;
    }

    public function getContainsSampledData()
    {
        return $this->containsSampledData;
    }

    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function setTotalsForAllResults($totalsForAllResults)
    {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    public function getTotalsForAllResults()
    {
        return $this->totalsForAllResults;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setQuery(GaDataQuery $query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    public function setProfileInfo(GaDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    public function setColumnHeaders( /* array(GaDataColumnHeaders) */
        $columnHeaders)
    {
        $this->assertIsArray($columnHeaders, 'GaDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }

    public function getColumnHeaders()
    {
        return $this->columnHeaders;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
