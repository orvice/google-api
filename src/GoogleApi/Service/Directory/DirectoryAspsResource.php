<?php

/**
 * The "asps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $asps = $adminService->asps;
 *  </code>
 */

use GoogleApi\Service\ServiceResource;

class Google_Service_Directory_Asps_Resource extends ServiceResource
{

    /**
     * Delete an ASP issued by a user. (asps.delete)
     *
     * @param string $userKey Identifies the user in the API request. The value can
     * be the user's primary email address, alias email address, or unique user ID.
     * @param int $codeId The unique ID of the ASP to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($userKey, $codeId, $optParams = array())
    {
        $params = array('userKey' => $userKey, 'codeId' => $codeId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Get information about an ASP issued by a user. (asps.get)
     *
     * @param string $userKey Identifies the user in the API request. The value can
     * be the user's primary email address, alias email address, or unique user ID.
     * @param int $codeId The unique ID of the ASP.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Directory_Asp
     */
    public function get($userKey, $codeId, $optParams = array())
    {
        $params = array('userKey' => $userKey, 'codeId' => $codeId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Directory_Asp");
    }

    /**
     * List the ASPs issued by a user. (asps.listAsps)
     *
     * @param string $userKey Identifies the user in the API request. The value can
     * be the user's primary email address, alias email address, or unique user ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Directory_Asps
     */
    public function listAsps($userKey, $optParams = array())
    {
        $params = array('userKey' => $userKey);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Directory_Asps");
    }
}