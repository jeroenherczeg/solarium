<?php

namespace Solarium\Component;

use Solarium\Component\RequestBuilder\Debug as RequestBuilder;
use Solarium\Component\ResponseParser\Debug as ResponseParser;

/**
 * Debug component.
 *
 * @see http://wiki.apache.org/solr/CommonQueryParameters#Debugging
 */
class Debug extends AbstractComponent
{
    /**
     * Get component type.
     *
     * @return string
     */
    public function getType()
    {
        return ComponentAwareQueryInterface::COMPONENT_DEBUG;
    }

    /**
     * Get a requestbuilder for this query.
     *
     * @return RequestBuilder
     */
    public function getRequestBuilder()
    {
        return new RequestBuilder();
    }

    /**
     * Get a response parser for this query.
     *
     * @return ResponseParser
     */
    public function getResponseParser()
    {
        return new ResponseParser();
    }

    /**
     * Get the explainOther option.
     *
     * @return string|null
     */
    public function getExplainOther()
    {
        return $this->getOption('explainother');
    }

    /**
     * Set the explainOther query.
     *
     * @param string $query
     *
     * @return self Provides fluent interface
     */
    public function setExplainOther($query)
    {
        return $this->setOption('explainother', $query);
    }
}
