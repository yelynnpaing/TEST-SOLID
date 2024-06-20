<?php

interface Writable
{
    public function write(string $content);
}

class FileWriter implements Writable
{
    public function write(string $content)
    {
        echo "Writing to file " . $content . " .";
    }
}

class DatabseWriter implements Writable
{
    public function write(string $content)
    {
        echo "Writing to database " . $content . " .";
    }
}

class Report 
{
    public function __construct(public Writable $writer)
    {

    }

    public function generate($data)
    {
        $content = "Report data " . $data . " .";
        $this->writer->write($content);
    }
}

$file1 = new Report(new DatabseWriter());
$file1->generate(" Something something...");

$file2 = new Report(new FileWriter());
$file2->generate("Nothing nothing...");