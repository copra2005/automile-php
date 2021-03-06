<?php

namespace Automile\Sdk\Models;

/**
 * PublishSubscribe Rowset Model
 */
class PublishSubscribeRowset extends ModelRowsetAbstract
{

    /**
     * Create new model to be added into the rowset
     * @param array|object $properties
     * @return PublishSubscribe
     */
    public function getModel($properties)
    {
        return new PublishSubscribe($properties);
    }

}
