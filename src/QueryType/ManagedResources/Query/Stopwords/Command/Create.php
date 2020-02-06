<?php

namespace Solarium\QueryType\ManagedResources\Query\Stopwords\Command;

use Solarium\Core\Client\Request;
use Solarium\QueryType\ManagedResources\Query\AbstractCommand;
use Solarium\QueryType\ManagedResources\Query\Stopwords;

class Create extends AbstractCommand
{
    /**
     * Returns command type, for use in adapters.
     *
     * @return string
     */
    public function getType(): string
    {
        return Stopwords::COMMAND_CREATE;
    }

    /**
     * Returns request method.
     *
     * @return string
     */
    public function getRequestMethod(): string
    {
        return Request::METHOD_PUT;
    }

    /**
     * Returns the raw data to be sent to Solr.
     */
    public function getRawData(): string
    {
        return json_encode(['class' => 'org.apache.solr.rest.schema.analysis.ManagedWordSetResource']);
    }

    /**
     * Empty.
     *
     * @return string
     */
    public function getTerm(): string
    {
        return '';
    }
}
