<?php

namespace Marks12\SocketServerBundle\Command;

use Marks12\SocketServerBundle\Server\Server;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ServerStartCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('socket:server:start')
            ->setDescription('Start socket server')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $server = new Server($output);
        $server->up();
    }

}
