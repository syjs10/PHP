
<?php foreach ($student_data as $student): ?>
      <h3><?php echo $student['name']; ?></h3>
      <div class="main">
            <?php echo $student['gender']; ?>
            <br>
            <?php echo $student['class']; ?>
            <br>
            <?php echo $student['phone']; ?>
      </div>

<?php endforeach; ?>
