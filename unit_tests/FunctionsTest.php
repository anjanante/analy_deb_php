<?php

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../functions.php');

final class FunctionsTest extends TestCase{
    public function testSiteNameIsEqual(){
        $this->assertEquals('NantConstruction', siteName());
    }
    public function testPageTitleIsEqual(){
        $_GET['page'] = 'ceci-est-un-test';
        $this->assertEquals('Ceci est un test', pageTitle());
    }
}

