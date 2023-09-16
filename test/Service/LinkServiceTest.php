<?php

namespace HyperfTest\Service;

use App\Repository\LinkRepositoryInterface;
use PHPUnit\Framework\TestCase;

class LinkServiceTest extends TestCase
{
    public function testCreate()
    {
        $link = new Link([
            'title' => 'Test',
            'url' => 'http://localhost.com'
        ]);

        $repo = $this->createConfiguredMock(LinkRepositoryInterface::class);
        $repo->expects($this->once())
            ->method('create')
            ->with($link)
            ->willReturn($link);
        $service = new LinkService($repo);

        $this->assertEquals($link, $service->create($link));
        $this->assertTrue(is_string($link->alias));
        $this->assertNull(is_string($link->expires_in));
    }
}
