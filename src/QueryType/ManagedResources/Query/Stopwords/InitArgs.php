<?php

namespace Solarium\QueryType\ManagedResources\Query\Stopwords;

use Solarium\QueryType\ManagedResources\Query\InitArgsInterface;

class InitArgs implements InitArgsInterface
{
    /**
     * Whether or not to ignore the case.
     *
     * @var bool
     */
    protected $ignoreCase;

    /**
     * Set ignore case.
     *
     * @param bool $ignoreCase
     *
     * @return self Provides fluent interface
     */
    public function setIgnoreCase(bool $ignoreCase): InitArgsInterface
    {
        $this->ignoreCase = $ignoreCase;
        return $this;
    }

    /**
     * Get ignore case.
     *
     * @return bool|null
     */
    public function getIgnoreCase(): ?bool
    {
        return $this->ignoreCase;
    }

    /**
     * Sets the configuration parameters to be sent to Solr.
     *
     * @param array $initArgs
     *
     * @return self Provides fluent interface
     */
    public function setInitArgs(array $initArgs): InitArgsInterface
    {
        foreach ($initArgs as $arg => $value) {
            switch ($arg) {
                case 'ignoreCase':
                    $this->setIgnoreCase($value);
                    break;
            }
        }

        return $this;
    }

    /**
     * Returns the configuration parameters to be sent to Solr.
     *
     * @return array
     */
    public function getInitArgs(): array
    {
        $initArgs = [];

        if (isset($this->ignoreCase)) {
            $initArgs['ignoreCase'] = $this->ignoreCase;
        }

        return $initArgs;
    }
}
