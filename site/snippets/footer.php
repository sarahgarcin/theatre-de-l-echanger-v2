<footer>
  <div class="row middle-xs">
    <div class="address col-xs-6">
      <?= $site->address()->kt()?>
    </div>
    <div class="socialnetworks col-xs-6">
      <ul>
        <?php foreach($site->social()->toStructure() as $social):?>
          <li>
            <a href="<?=$social->url()?>" title="<?=$social->text()?>" target="_blank">
              <?=$social->text()?>
            </a>
          </li>

        <?php endforeach;?>
      </ul>
    </div>
  </div>
</footer>


  <!-- scripts -->
  <?php

    // if ( option('environment') == 'local' ) :
      foreach ( option('julien-gargot.assets.scripts', array()) as $style):
        echo js($style.'?version='.md5(uniqid(rand(), true)));
      endforeach;
    // else:
      echo js('assets/production/all.min.js');
    // endif
  ?>

</body>
</html>
