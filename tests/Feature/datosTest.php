<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\genericas2016;

class datosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function testobtenerInstituciones()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST','/obtenerInstituciones');
        $this->assertEquals(200, $response->getStatusCode());
        //$response->assertStatus(200);
    
    
    }

    public function testconsultaPosicionGenericas()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST','/consultaPosicionGenericas');
        $this->assertEquals(200, $response->getStatusCode());
        //$response->assertStatus(200);
        
        
    }

    public function testobtenerMunicipio()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST','/obtenerMunicipio',['ESTU_DEPTO_RESIDE'=>'CALDAS']);
        
        $this->assertEquals(200, $response->getStatusCode());
        
    
    } 
      
    
}
