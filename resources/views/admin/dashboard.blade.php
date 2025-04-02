@extends('admin.layouts')
@section('content')
      <section class="content-main">
        <div class="content-header">
          <div>
            <h2 class="content-title card-title">Tableau de bord</h2>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-body mb-4">
                <article class="icontext"><span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-message"></i></span>
                  <div class="text">
                    <h6 class="mb-1 card-title">Message</h6><span>{{count($messages)}}</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-body mb-4">
                <article class="icontext">
                  <span class="icon icon-sm rounded-circle bg-success-light">
                    <svg style="color: #00b517;width: 20px;height: 20px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                      <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                      <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                    </svg>
                  </span>
                  <div class="text">
                    <h6 class="mb-1 card-title">Services</h6><span>0</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-body mb-4">
                <article class="icontext">
                  <span class="icon icon-sm rounded-circle bg-warning-light">
                    <svg style="color: #fd8a14;width: 20px;height: 20px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                  </span>
                  <div class="text">
                    <h6 class="mb-1 card-title">Admin</h6><span>{{$admins}}</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-body mb-4">
                <article class="icontext">
                  <span class="icon icon-sm rounded-circle bg-primary-light">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #1471fd;width: 20px;height: 20px;" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                  </span>
                  <div class="text">
                    <h6 class="mb-1 card-title">Utilisateur</h6><span>0</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-body mb-4">
                <article class="icontext">
                  <span class="icon icon-sm rounded-circle bg-success-light">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #00b517;width: 20px;height: 20px;"  fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                      <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                      <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                    </svg>
                  </span>
                  <div class="text">
                    <h6 class="mb-1 card-title">Cotation en ligne</h6><span>0</span>
                  </div>
                </article>
              </div>
            </div>
          </div>


        <div class="row">
          <div class="card mb-4 col-xl-12 col-lg-12 col-md-12 col-12" style="margin-right: 30px">
            <header class="card-header" style="padding-bottom: 0;">
              <h4 class="card-title">Messages</h4>
            </header>
            <div class="card-body">
              <div class="table-responsive">
                <div class="table-responsive">
                  <table class="table align-middle table-nowrap mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($messages as $msg)
                        <tr>
                          <td>{{$msg->id}}</td>
                          <td>{{$msg->name}}</td>
                          <td>{{$msg->email}}</td>
                          <td>{{$msg->created_at}}</td>
                          <td class="text-end">
                              <a href="{{ url('admin/messages/detail/'.$msg->id)}}" class="btn btn-primary">Detail</a>
                              <a href="{{ url('admin/messages/delete/'.$msg->id)}}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg></a>
                          </td>
                        </tr>
                      @endforeach      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection