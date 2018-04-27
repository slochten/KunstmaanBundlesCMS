<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'kunstmaan_translator.service.importer.command_handler' shared service.

$this->services['kunstmaan_translator.service.importer.command_handler'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler();

$instance->setManagedLocales($this->parameters['kuma_translator.managed_locales']);
$instance->setKernel(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
$instance->setTranslationFileExplorer(${($_ = isset($this->services['kunstmaan_translator.service.file_explorer']) ? $this->services['kunstmaan_translator.service.file_explorer'] : $this->load(__DIR__.'/getKunstmaanTranslator_Service_FileExplorerService.php')) && false ?: '_'});
$instance->setImporter(${($_ = isset($this->services['kunstmaan_translator.service.importer.importer']) ? $this->services['kunstmaan_translator.service.importer.importer'] : $this->load(__DIR__.'/getKunstmaanTranslator_Service_Importer_ImporterService.php')) && false ?: '_'});

return $instance;
