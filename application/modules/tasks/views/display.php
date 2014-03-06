<?php
            foreach ($details as $value) :
                echo "<h2>$value->title</h2>";
            endforeach;
            echo"<hr>";
            $this->load->module('nofun');
            echo $this->nofun->otherfunction();
            echo"<hr>";
            echo Modules::run('nofun/otherfunction');
            ?>
