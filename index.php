<?php phpinfo(); ?>

<?php echo 'terminal' 

$a =array("computer memory"=>
                            ["primary memory"=>
                                                ["RAM"=>["SRAM"
                                                         ,"DRAM"
                                                        ]
                                                ,"ROM"=>["PROM"
                                                        ,"EPROM"
                                                        ,"EEPROM"
                                                        ]
                                                 ]             //multidimension array
                              ,"secondry memory"=>
                                                   ["magnetic storage"=> ["HDD"
                                                                         ,"floppy disk"
                                                                         ,"magnetic tape"
                                                                         ]
                                                     ,"optical storage"=>["CD"
                                                                          ,"DVD"
                                                                         ]
                                                     ,"flash storage"=>["pen drive"
                                                                         ,"memory card"
                                                                        ]
                                                    ]
                             ]
);
print_r($a);

?>