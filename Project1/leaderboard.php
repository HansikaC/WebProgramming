<html>
<body>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <h1>LEADERBOARD</h1>
        <?php
            $file = '../data/data.txt';
            $textFile = file_get_contents($file);
            $singles = explode("\n", $textFile);
            $player = $_POST["player"];
            $userInfo = array();
            $rank = 0;
            foreach ($singles as $users => $row) {
                $name[$users] = $row['name'];
                $score[$users] = $row['score'];                
                
            }
            $name = array_column($singles, 'name');
            $score = array_column($singles, 'score');

            array_multisort($name, SORT_ASC, $score, SORT_DESC, $singles);
        ?>

        <div>
            <form action="leaderboard.php" method="GET">
                <fieldset>
                    <table style="width:100%" id="player">
                    <tr style="text-align:center">
                        <tr>
                            <th>Rank</th>
                            <th>PLAYER</th>
                            <th>SCORE</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Hansika</td>
                             <td>100000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Srilatha</td>
                            <td>10000</td>
                        </tr>
                      </table>
                    </br>
                </fieldset>
            </form>
        </div>
        
    </body>
    </html>


