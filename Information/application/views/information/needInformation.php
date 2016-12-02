<?php echo form_open('information/needInformation'); ?>
<?php
      echo "个数:";
      echo "<input type = 'text' name = 'num' >";
      for ($i = 0; $i < 20; $i++) {
            echo 'I'.$i;
            echo "<input type = 'text' name = 'I".$i."' >";
            echo "<br>";
      }
?>
<input type="submit">
</form>
