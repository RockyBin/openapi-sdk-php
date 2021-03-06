<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Mts\V20140618\QueryFpImportResult;
use PHPUnit\Framework\TestCase;

/**
 * Class MtsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class MtsTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::mts()
                               ->v20140618()
                               ->queryFpImportResult()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(QueryFpImportResult::class, $request);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testMts()
    {
        $result = AlibabaCloud::mts()
                              ->v20140618()
                              ->queryFpImportResult()
                              ->format('JSON')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('PageInfo', $result);
    }
}
