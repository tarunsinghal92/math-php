<?php
namespace Math\Arithmetic;

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderForSignum
     */
    public function testSignum($x, $sign)
    {
        $this->assertEquals($sign, Functions::signum($x));
    }

    /**
     * @dataProvider dataProviderForSignum
     */
    public function testSgn($x, $sign)
    {
        $this->assertEquals($sign, Functions::sgn($x));
    }

    public function dataProviderForSignum()
    {
        return [
        [ 0, 0 ],
        [ 1, 1 ], [ 0.5, 1 ], [ 1.5, 1 ], [ 4, 1 ], [ 123241.342, 1 ],
        [ -1, -1 ], [ -0.5, -1 ], [ -1.5, -1 ], [ -4, -1 ], [ -123241.342, -1 ],
        ];
    }

    /**
     * @dataProvider dataProviderForGammaLanczos
     */
    public function testGamma($z, $Γ)
    {
        $this->assertEquals($Γ, Functions::gamma($z), '', 0.001);
    }

    /**
     * @dataProvider dataProviderForGammaLanczos
     */
    public function testGammaLanczos($z, $Γ)
    {
        $this->assertEquals($Γ, Functions::gammaLanczos($z), '', 0.001);
    }

    public function dataProviderForGammaLanczos()
    {
        return [
            [0.1, 9.51350769866873183629],
            [0.2, 4.5908437119988030532],
            [0.3, 2.99156898768759062831],
            [0.4, 2.21815954375768822306],
            [0.5, 1.772453850905516027298],
            [0.6, 1.489192248812817102394],
            [0.7, 1.29805533264755778568],
            [0.8, 1.16422971372530337364],
            [0.9, 1.0686287021193193549],
            [1,   1],
            [1.1, 0.951350769866873183629],
            [1.2, 0.91816874239976061064],
            [1.3, 0.89747069630627718849],
            [1.4, 0.88726381750307528922],
            [1.5, 0.88622692545275801365],
            [1.6, 0.89351534928769026144],
            [1.7, 0.90863873285329044998],
            [1.8, 0.9313837709802426989091],
            [1.9, 0.96176583190738741941],
            [2,   1],
            [3,   2],
            [4,   6],
            [5,   24],
            [6,   120],
            [2.5, 1.32934038817913702047],
            [5.324, 39.54287866273389258523],
            [10.2, 570499.02784103598123],
            [0, \INF],
            [-1, -\INF],
            [-2, -\INF],
            [-0.1, -10.686287021193193549],
            [-0.4, -3.72298062203204275599],
            [-1.1, 9.7148063829029032263],
            [-1.2, 4.8509571405220973902],
        ];
    }

    /**
     * @dataProvider dataProviderForGammaStirling
     */
    public function testGammaStirling($n, $Γ)
    {
        $this->assertEquals($Γ, Functions::gammaStirling($n), '', 0.01);
    }

    public function dataProviderForGammaStirling()
    {
        return [
        [ 1, 1 ],
        [ 2, 1 ],
        [ 3, 2 ],
        [ 4, 6 ],
        [ 5, 24 ],
        [ 6, 120 ],
        [ 1.1, 0.951350769866873183629 ],
        [ 1.2, 0.91816874239976061064 ],
        [ 1.5, 0.88622692545275801365 ],
        [ 2.5, 1.32934038817913702047 ],
        [ 5.324, 39.54287866273389258523 ],
        [ 10.2, 570499.02784103598123 ],
        [ 0, \INF ],
        [ -1, -\INF ],
        [ -2, -\INF ],
        ];
    }
}