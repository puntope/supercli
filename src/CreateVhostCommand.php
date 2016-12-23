<?php

namespace Supercli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CreateVhostCommand extends Command
{
    protected function configure()
    {
       $this->setName('create-vhost')
           ->setDescription('Create a new Virtual Host instance')
           ->addArgument('server-name', InputArgument::REQUIRED, "Server name of the Virtual Host")
           ->addOption('no-host', null, InputOption::VALUE_NONE, 'Disable /etc/hosts/ entry creation')
           ->addOption('no-reload', null, InputOption::VALUE_NONE, "Disable Apache reload after vhost creation")
           ->addOption('ip', null, InputOption::VALUE_REQUIRED, "Specific server IP (default: 127.0.0.1)", "127.0.0.1");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // locate apache instalation
        // check if vhost exist
        // locate hostfile
        //
        // create vhost
        // create hostfile entry
        // enable site
        // reload apache
        //
        // output info
    }

    // check instances
        // get instance type
        // find reference files
        // answer user
        // return results
}