@extends('account/account_layout')

@section('content')

<section class="hbox stretch bg-white-only">

<aside class="aside aside-lg b-r">
  <section class="vbox">
    <header class="header text-center">
      <p class="h4">{{ $page_title }}</p>
    </header>
    <section class="wrapper">
      <div class="text-center clearfix">
        <a href="#" class="btn btn-success m-b-lg"><i class="fa fa-plus"></i> Create project</a>
      </div>
      <div id="calendar" class="m-t-lg">

      <div class="calendar" id="cal_1t7p"><table class="table header"><tbody><tr></tr></tbody><td><i class="icon-arrow-left"></i></td><td colspan="5" class="year span6"><div class="visualmonthyear">April 2014</div></td><td><i class="icon-arrow-right"></i></td></table><table class="daysmonth table table"><tbody><tr class="week_days"><td class="first">S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td class="last">S</td></tr><tr><td class="invalid first"></td><td class="invalid"></td><td id="cal_1t7p_1_4_2014"><a>1</a></td><td id="cal_1t7p_2_4_2014"><a>2</a></td><td id="cal_1t7p_3_4_2014"><a>3</a></td><td id="cal_1t7p_4_4_2014"><a>4</a></td><td id="cal_1t7p_5_4_2014" class="last"><a>5</a></td></tr><tr><td id="cal_1t7p_6_4_2014" class="first"><a>6</a></td><td id="cal_1t7p_7_4_2014"><a>7</a></td><td id="cal_1t7p_8_4_2014"><a>8</a></td><td id="cal_1t7p_9_4_2014"><a>9</a></td><td id="cal_1t7p_10_4_2014"><a>10</a></td><td id="cal_1t7p_11_4_2014"><a>11</a></td><td id="cal_1t7p_12_4_2014" class="last"><a>12</a></td></tr><tr><td id="cal_1t7p_13_4_2014" class="first"><a>13</a></td><td id="cal_1t7p_14_4_2014"><a>14</a></td><td id="cal_1t7p_15_4_2014"><a>15</a></td><td id="cal_1t7p_16_4_2014"><a>16</a></td><td id="cal_1t7p_17_4_2014"><a>17</a></td><td id="cal_1t7p_18_4_2014"><a>18</a></td><td id="cal_1t7p_19_4_2014" class="last"><a>19</a></td></tr><tr><td id="cal_1t7p_20_4_2014" class="first"><a>20</a></td><td id="cal_1t7p_21_4_2014"><a>21</a></td><td id="cal_1t7p_22_4_2014"><a>22</a></td><td id="cal_1t7p_23_4_2014"><a>23</a></td><td id="cal_1t7p_24_4_2014"><a>24</a></td><td id="cal_1t7p_25_4_2014"><a>25</a></td><td id="cal_1t7p_26_4_2014" class="last"><a>26</a></td></tr><tr><td id="cal_1t7p_27_4_2014" class="first"><a>27</a></td><td id="cal_1t7p_28_4_2014"><a>28</a></td><td id="cal_1t7p_29_4_2014"><a>29</a></td><td id="cal_1t7p_30_4_2014"><a>30</a></td><td class="invalid"></td><td class="invalid"></td><td class="invalid last"></td></tr></tbody></table></div></div>
      <div class="list-group bg-white">
        <a href="#" class="list-group-item text-ellipsis">
          <span class="badge bg-danger">7:30</span>
          Meet a friend
        </a>
        <a href="#" class="list-group-item text-ellipsis">
          <span class="badge bg-success">9:30</span>
          Have a kick off meeting with .inc company
        </a>
        <a href="#" class="list-group-item text-ellipsis">
          <span class="badge bg-light">19:30</span>
          Milestone release
        </a>
      </div>
    </section>                
  </section>
</aside>

<aside class="">
  <section class="vbox">
    <header class="header bg-white pos-rlt navbar navbar-default show">
      <span class="arrow left"></span>
      <div class="collapse navbar-collapse pull-in">
        <ul class="nav navbar-nav">
          <li><a href="#">Tasks</a></li>
          <li class="font-bold"><a href="#l">Stream</a></li>
          <li><a href="#l">Team</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Files <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Documents</a></li>
              <li><a href="#">Media</a></li>
              <li><a href="#">Upload one</a></li>
            </ul>
          </li>
          <li><a href="#l">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="badge up bg-success m-l-n-sm">2</span>
            </a>
            <section class="dropdown-menu animated fadeInUp input-s-lg">
              <section class="panel bg-white">
                <header class="panel-heading">
                  <strong>You have <span class="count-n">2</span> notifications</strong>
                </header>
                <div class="list-group">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="images/avatar.jpg" alt="John said" class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">28 Aug 13</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">27 Aug 13</small>
                    </span>
                  </a>
                </div>
                <footer class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#">See all the notifications</a>
                </footer>
              </section>
            </section>
          </li>
        </ul>
      </div>
    </header>
    <section>
      <section class="hbox stretch">
        <aside>
          <section class="vbox">
            <section class="scrollable wrapper">
              <div class="clearfix">
                <section class="panel panel-info col-lg-6 no-padder">
                  <form>
                    <textarea class="form-control no-border" rows="2" placeholder="Share something..."></textarea>
                  </form>
                  <footer class="panel-footer bg-light lter">
                    <button class="btn btn-info pull-right btn-sm font-bold">SHARE</button>
                    <ul class="nav nav-pills nav-sm">
                      <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                      <li><a href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                    </ul>
                  </footer>
                </section>
              </div>
              <div class="btn-group m-b" data-toggle="buttons">
                <label class="btn btn-sm btn-white active">
                  <input type="radio" name="options" id="option1"> Timeline
                </label>
                <label class="btn btn-sm btn-white">
                  <input type="radio" name="options" id="option2"> Activity
                </label>
              </div>
              <section class="comment-list block">
                <article id="comment-id-1" class="comment-item">
                  <span class="fa-stack pull-left m-l-xs">
                    <i class="fa fa-circle text-info fa-stack-2x"></i>
                    <i class="fa fa-film fa-stack-1x text-white"></i>
                  </span>
                  <section class="comment-body m-b-lg">
                    <header>
                      <a href="#"><strong>John smith</strong></a> shared a <a href="#" class="text-info">video</a> to you
                      <span class="text-muted text-xs">
                        24 minutes ago
                      </span>
                    </header>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam.</div>
                  </section>
                </article>
                <!-- .comment-reply -->
                <article id="comment-id-2" class="comment-reply">
                  <article class="comment-item">
                    <a class="pull-left thumb-sm">
                      <img src="images/avatar_default.jpg" class="img-circle">
                    </a>
                    <section class="comment-body m-b-lg">
                      <header>
                        <a href="#"><strong>John smith</strong></a>
                        <span class="text-muted text-xs">
                          26 minutes ago
                        </span>
                      </header>
                      <div> Morbi id neque quam. Aliquam.</div>
                    </section>
                  </article>
                  <article class="comment-item">
                    <a class="pull-left thumb-sm">
                      <img src="images/avatar.jpg" class="img-circle">
                    </a>
                    <section class="comment-body m-b-lg">
                      <header>
                        <a href="#"><strong>Mike</strong></a>
                        <span class="text-muted text-xs">
                          26 minutes ago
                        </span>
                      </header>
                      <div>Good idea.</div>
                    </section>
                  </article>                     
                </article>                     
                <!-- / .comment-reply -->
                <article id="comment-id-2" class="comment-item">
                  <span class="fa-stack pull-left m-l-xs">
                    <i class="fa fa-circle text-success fa-stack-2x"></i>
                    <i class="fa fa-file-text-o text-white fa-stack-1x"></i>
                  </span>
                  <section class="comment-body m-b-lg">
                    <header>
                      <a href="#"><strong>John Doe</strong></a>
                      <span class="text-muted text-xs">
                        1 hour ago
                      </span>
                    </header>
                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit.</div>
                  </section>
                </article>
                <article id="comment-id-2" class="comment-item">
                  <span class="fa-stack pull-left m-l-xs">
                    <i class="fa fa-circle text-danger fa-stack-2x"></i>
                    <i class="fa fa-check fa-stack-1x text-white"></i>
                  </span>
                  <section class="comment-body m-b-lg">
                    <header>
                      <a href="#"><strong>Jonathan</strong></a> completed a task
                      <span class="text-muted text-xs">
                        1 hour ago
                      </span>
                    </header>
                    <div>Consecteter adipiscing elit.</div>
                  </section>
                </article>
              </section>
              <a href="#" class="btn btn-white btn-sm"><i class="fa fa-plus icon-muted"></i> more</a>
            </section>
          </section>
        </aside>
      </section>
    </section>
  </section>
</aside>
</section>

@stop