@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                    <div class="card card-sucress cardutline direct-chat direct-chat-success">
                        <div class="card-header">
                          <h3 class="card-title">Direct Chat</h3>
          
                          <div class="card-tools">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                              <i class="fas fa-comments"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- Conversations are loaded here -->
                          <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
          
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                You better believe it!
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                          </div>
                          <!--/.direct-chat-messages-->
          
                          <!-- Contacts are loaded here -->
                          <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
          
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Count Dracula
                                      <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                            </ul>
                            <!-- /.contatcts-list -->
                          </div>
                          <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <form action="#" method="post">
                            <div class="input-group">
                              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                              <span class="input-group-append">
                                <button type="submit" class="btn btn-success">Send</button>
                              </span>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-footer-->
                      </div>
                </div>
            </div>
        </div>
    </div>
@stop
