<?php

/**
 * The "mobiledevices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $mobiledevices = $adminService->mobiledevices;
 *  </code>
 */

use GoogleApi\Service\ServiceResource;


class Google_Service_DirectoryMobiledevicesResource extends ServiceResource
{

    /**
     * Take action on Mobile Device (mobiledevices.action)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param Google_MobileDeviceAction $postBody
     * @param array $optParams Optional parameters.
     */
    public function action($customerId, $resourceId, Google_Service_Directory_MobileDeviceAction $postBody, $optParams = array())
    {
        $params = array('customerId' => $customerId, 'resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('action', array($params));
    }

    /**
     * Delete Mobile Device (mobiledevices.delete)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     */
    public function delete($customerId, $resourceId, $optParams = array())
    {
        $params = array('customerId' => $customerId, 'resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Retrieve Mobile Device (mobiledevices.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of
     * selected fields.
     * @return Google_Service_Directory_MobileDevice
     */
    public function get($customerId, $resourceId, $optParams = array())
    {
        $params = array('customerId' => $customerId, 'resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Directory_MobileDevice");
    }

    /**
     * Retrieve all Mobile Devices of a customer (paginated)
     * (mobiledevices.listMobiledevices)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string projection Restrict information returned to a set of
     * selected fields.
     * @opt_param int maxResults Maximum number of results to return. Default is 100
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string sortOrder Whether to return results in ascending or
     * descending order. Only of use when orderBy is also used
     * @opt_param string query Search string in the format given at
     * http://support.google.com/a/bin/answer.py?hl=en=1408863#search
     * @return Google_Service_Directory_MobileDevices
     */
    public function listMobiledevices($customerId, $optParams = array())
    {
        $params = array('customerId' => $customerId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Directory_MobileDevices");
    }
}