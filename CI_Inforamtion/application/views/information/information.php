<?php echo form_open(site_url(['information/saveData'])) ?>
<table>
      <?php foreach ($need as $needs) :?>
      <tr>
            <td>
                  <?php echo $needs['inf']; ?>
            </td>
            <td>
                  <input type="text" name="<?php echo $needs['inf']; ?>" >
            </td>
      </tr>
      <?php endforeach?>

</table>
<input type="submit" value="提交">
</form>
