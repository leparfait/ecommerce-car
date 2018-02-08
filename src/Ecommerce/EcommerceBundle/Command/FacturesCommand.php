<?php

namespace Ecommerce\EcommerceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputAwareInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FacturesCommand extends ContainerAwareCommand
{
    public function configure() {
        $this->setName('ecommerce:facture')
             ->setDescription('Commande de recuperation des factures')
             ->addArgument('Date', InputArgument::OPTIONAL,'Date à partir de laquelle on recupere toutes les factures');
    }
    
    public function execute(\Symfony\Component\Console\Input\InputInterface $input, OutputInterface $output) {
        
        $date = new \DateTime();
        $em = $this->getContainer()->get('doctrine')->getManager();
        $factures = $em->getRepository('EcommerceBundle:Commandes')->byDateCommand($input->getArgument('date'));
        
        $output->writeln(count($factures).'factures');
        
        if(count($factures) > 0){
        
        $dir = $date->format('d-m-y h-i-s');
        mkdir('Facturation/'.$dir);
        
        foreach($factures as $facture){
            $this->getContainer()->get('setNewFacture')->facture($facture)
                             ->Output('Facturation/'.$dir.'/facture'.$facture->getReference().'pdf','F');
        }         
      }
    }
}