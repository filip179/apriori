<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Apriori Alghoritm</title>
    </head>
    <body style="font-family: monospace;">
        <?php
        ini_set('max_execution_time', -1);
        ini_set('memory_limit', '2048M');
      //      include 'CreateData.php';
       //     new CreateData();Q
            include 'Apriori.php';

            $Apriori = new Apriori();

            $Apriori->setMaxScan(5);       //Scan 2, 3, ...
            $Apriori->setMinSup(5);         //Minimum support 1, 2, 3, ...
            $Apriori->setMinConf(80);       //Minimum confidence - Percent 1, 2, ..., 100
            $Apriori->setDelimiter(',');    //Delimiter
            $Apriori->process('dataset.txt');
        ?>

        <h1>Frequent Itemsets</h1>
        <?php $Apriori->printFreqItemsets(); ?>

        <h1>Association Rules</h1>
        <?php $Apriori->printAssociationRules(); ?>

    </body>
</html>