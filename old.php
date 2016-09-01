<?php
$title = "ez3ds - Old 3DS - Pick system version";
include_once("_header.php");
?>
<!-- Modal -->
<div class="modal fade" id="findfw" tabindex="-1" role="dialog" aria-labelledby="findfwbox">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Find system version</h4>
      </div>
      <div class="modal-body">
        <div id="mset-img">
          <p>Find the <b>System Settings</b> icon on your HOME Menu.</p>
          <p><img id="mset-icn" src="img/game/mset.png"></p>
          <p>Find the version on the <b>top screen, bottom right corner</b>.<br>For example, 11.0.0-33U.</p>
          <img id="mset-scr" src="img/mset-scr.png">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1>Pick system version</h1>
  <p>Note this only covers USA/EUR/JPN consoles (firmware ending in U/E/J).</p>
  <p>If your firmware is somehow not listed, create an issue on <a href="https://github.com/ihaveamac/ez3ds">GitHub</a>. Very new firmwares will be added soon after their release.</p>
  <form class="firmware" action="checkfw.php" method="post">
    <input type="hidden" value="Old" name="model">
    <p>
      <!-- default selected firmware is 9.2.0-20 -->
      <select name="major">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11" selected="selected">11</option>
      </select>
      .
      <select name="minor">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
      </select>
      .
      <select name="revision">
        <option value="0" selected="selected">0</option>
      </select>
      -
      <select name="nver">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        <option value="32">32</option>
        <option value="33" selected="selected">33</option>
      </select>
      <select name="region">
        <option value="U" selected="selected">U</option>
        <option value="E">E</option>
        <option value="J">J</option>
      </select>
    </p>
    <p>
      <input class="btn btn-primary" type="submit" value="Submit">
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#findfw">Where?</button>
    </p>
  </form>
</div>
<?php include_once("_footer.php"); ?>
