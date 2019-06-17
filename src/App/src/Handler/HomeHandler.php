<?php

declare(strict_types=1);

namespace App\Handler;

use App\Usuario;
use ArrayObject;
use App\Performance\Ponto;
use App\Performance\Pontuacao;
use App\Performance\Performance;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Component\Serializer\Serializer;
use Zend\Hydrator\ReflectionHydrator;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class HomeHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {

        $usuario = new Usuario();
        $usuario->setNome('Raffael');
        $usuario->setEmail('raffaelbmartins@gmail.com');

        $performance = new Performance();
        $performance->setUsuario($usuario);

        $p2018 = new Pontuacao();
        $p2018->setAno('2018');

        $p2019 = new Pontuacao();
        $p2019->setAno('2019');

        $ponto1 = new Ponto();
        $ponto1->setCodigo('0001');
        $ponto1->setNome('Nome do Ponto');
        $ponto1->setValor(9);

        $ponto2 = new Ponto();
        $ponto2->setCodigo('0002');
        $ponto2->setNome('Nome do Ponto');
        $ponto2->setValor(7.5);

        $ponto3 = new Ponto();
        $ponto3->setCodigo('0003');
        $ponto3->setNome('Nome do Ponto');
        $ponto3->setValor(8.3);

        $ponto4 = new Ponto();
        $ponto4->setCodigo('0004');
        $ponto4->setNome('Nome do Ponto');
        $ponto4->setValor(9.2);

        $ponto5 = new Ponto();
        $ponto5->setCodigo('0005');
        $ponto5->setNome('Nome do Ponto');
        $ponto5->setValor(10);

        $p2018->setPonto($ponto1);
        $p2018->setPonto($ponto2);
        $p2018->setPonto($ponto3);
        $p2018->setPonto($ponto4);
        $p2018->setPonto($ponto5);

        $p2019->setPonto($ponto1);
        $p2019->setPonto($ponto2);
        $p2019->setPonto($ponto3);
        $p2019->setPonto($ponto4);
        $p2019->setPonto($ponto5);

        $performance->setPontuacao($p2018);
        $performance->setPontuacao($p2019);
        
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $performance =  $serializer->serialize($performance, 'json');

        $array = json_decode($performance);
        return new JsonResponse($array);
    }
}
