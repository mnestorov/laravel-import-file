<?php

namespace App\Mappings;

class RecordTypeMapping
{
    private $mapping;

    public function __construct()
    {
        $this->mapping = $this->initializeMapping();
    }

    private function initializeMapping()
    {
        $recordMappings = \App\Models\RecordMapping::all();

        $mapping = [];

        foreach ($recordMappings as $recordMapping) {
            $recordType = \App\Models\RecordType::find($recordMapping->record_type_id);
            $recordTypeKey = $recordType->type;

            if (!isset($mapping[$recordTypeKey])) {
                $mapping[$recordTypeKey] = [];
            }

            $mapping[$recordTypeKey][] = [
                'start_range' => $recordMapping->start_range - 1, // Adjust index to be zero-based
                'end_range' => $recordMapping->end_range,
                'length' => $recordMapping->length,
                'description' => $recordMapping->description,
                'record_type_id' => $recordMapping->record_type_id,
            ];
        }

        return $mapping;
    }


    public function getMapping()
    {
        return $this->mapping;
    }
}
