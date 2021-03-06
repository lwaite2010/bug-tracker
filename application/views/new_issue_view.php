
<div id="new-form">
    <?php 
        $form_attributes = array(
            'name'  => 'new-issue-form',
            'cols'  => '100',
            
        );
        $title_data = array(
            'name'  => 'title',
            'id'    => 'title'
        );
        $description_data = array(
            'name'  => 'description',
            'id'    => 'description'
        );
        $priority_options = array(
            '1'     => 'Urgent',
            '2'     => 'Pending',
            '3'     => 'In Progress',
            '4'     => 'Testing'
        );

        echo validation_errors();
        echo form_open('/issues/create_issue');

        echo form_label('Issue: ', 'title');
        echo "<br>";
        echo form_input($title_data);
        echo "<br>";
        echo form_label('Priority: ', 'priority');
        echo form_dropdown('priority', $priority_options, '2');
        echo "<br>";
        echo form_label('Description: ', 'description');
        echo "<br>";
        echo form_textarea($description_data);
        echo "<br>";
        echo form_submit('submit', 'Submit', "class='btn btn-small'");

        echo form_close();
    ?>
</div>