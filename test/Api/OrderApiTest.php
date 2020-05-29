<?php
/**
 * OrderApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BitMEX API
 *
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)  -  #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  _All_ table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  _This is only a small subset of what is available, to get you started._  Fill in the parameters and click the `Try it out!` button to try any of these queries.  - [Pricing Data](#!/Quote/Quote_get)  - [Trade Data](#!/Trade/Trade_get)  - [OrderBook Data](#!/OrderBook/OrderBook_getL2)  - [Settlement Data](#!/Settlement/Settlement_get)  - [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)  -  ## All API Endpoints  Click to expand a section.
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for orderAmend
     *
     * Amend the quantity or price of an open order..
     *
     */
    public function testOrderAmend()
    {
    }

    /**
     * Test case for orderAmendBulk
     *
     * Amend multiple orders for the same symbol..
     *
     */
    public function testOrderAmendBulk()
    {
    }

    /**
     * Test case for orderCancel
     *
     * Cancel order(s). Send multiple order IDs to cancel in bulk..
     *
     */
    public function testOrderCancel()
    {
    }

    /**
     * Test case for orderCancelAll
     *
     * Cancels all of your orders..
     *
     */
    public function testOrderCancelAll()
    {
    }

    /**
     * Test case for orderCancelAllAfter
     *
     * Automatically cancel all your orders after a specified timeout..
     *
     */
    public function testOrderCancelAllAfter()
    {
    }

    /**
     * Test case for orderClosePosition
     *
     * Close a position. [Deprecated, use POST /order with execInst: 'Close'].
     *
     */
    public function testOrderClosePosition()
    {
    }

    /**
     * Test case for orderGetOrders
     *
     * Get your orders..
     *
     */
    public function testOrderGetOrders()
    {
    }

    /**
     * Test case for orderNew
     *
     * Create a new order..
     *
     */
    public function testOrderNew()
    {
    }

    /**
     * Test case for orderNewBulk
     *
     * Create multiple new orders for the same symbol..
     *
     */
    public function testOrderNewBulk()
    {
    }
}
