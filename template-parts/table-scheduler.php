<?php $gymbox_schedule = get_field( 'gymbox_scheduler' ); ?>
<table id="scheduler" class="table table-bordered scheduler-table my-5">
    <thead>
        <tr>
            <?php 
                foreach ($gymbox_schedule['header'] as $th) {
                    echo '<th>';
                        echo $th['c'];
                    echo '</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ( $gymbox_schedule['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        $test = strip_tags( $td['c'] );
                        echo '<td data-zajecia="' . $test . '">';
                            echo nl2br( $td['c'] );
                        echo '</td>';
                    }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>