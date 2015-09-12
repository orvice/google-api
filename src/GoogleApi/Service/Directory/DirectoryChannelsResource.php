<?php

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $channels = $adminService->channels;
 *  </code>
 */

use GoogleApi\Service\ServiceResource;

class GoogleServiceDirectoryChannelsResource extends ServiceResource
{

    /**
     * Stop watching resources through this channel (channels.stop)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     */
    public function stop(Google_Service_Directory_Channel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('stop', array($params));
    }
}