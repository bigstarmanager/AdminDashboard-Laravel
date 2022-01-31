{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','App Page Editor')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/katex.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/monokai-sublime.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.snow.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.bubble.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
<style>
  .app-page_editor {
    height: 300px;
  }
</style>
@endsection

{{-- page content --}}
@section('content')
<div class="section">
  <form action="">
    <!-- Snow Editor start -->
    <section class="snow-editor">
      <div class="row">
        <div class="col s12 mt-2">
          <div>
            <h4>
              About Us Page
            </h4>
          </div>
          <div class="card">
            <div class="card-content">
              <h4 class="card-title">Description</h4>
              <div class="row">
                <div class="col s12">
                  <div id="snow-wrapper">
                    <div id="snow-container">
                      <div class="quill-toolbar">
                        <span class="ql-formats">
                          <select class="ql-header browser-default">
                            <option value="1">Heading</option>
                            <option value="2">Subheading</option>
                            <option selected>Normal</option>
                          </select>
                          <select class="ql-font browser-default">
                            <option selected>Sailec Light</option>
                            <option value="sofia">Sofia Pro</option>
                            <option value="slabo">Slabo 27px</option>
                            <option value="roboto">Roboto Slab</option>
                            <option value="inconsolata">Inconsolata</option>
                            <option value="ubuntu">Ubuntu Mono</option>
                          </select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                          <button class="ql-video"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-formula"></button>
                          <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>
                      </div>
                      <div class="editor app-page_editor">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <h6 class="ml-1 mt-1">Image</h6>
                <div class="col s6 m3">
                  <input type="file" id="input-file-disable-remove" class="dropify" data-disable-remove="true" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 mt-2">
          <div>
            <h4>
              How it Works
            </h4>
          </div>
          <div class="card">
            <div class="card-content">
              <h4 class="card-title">Description</h4>
              <div class="row">
                <div class="col s12">
                  <div id="snow-wrapper1">
                    <div id="snow-container1">
                      <div class="quill-toolbar">
                        <span class="ql-formats">
                          <select class="ql-header browser-default">
                            <option value="1">Heading</option>
                            <option value="2">Subheading</option>
                            <option selected>Normal</option>
                          </select>
                          <select class="ql-font browser-default">
                            <option selected>Sailec Light</option>
                            <option value="sofia">Sofia Pro</option>
                            <option value="slabo">Slabo 27px</option>
                            <option value="roboto">Roboto Slab</option>
                            <option value="inconsolata">Inconsolata</option>
                            <option value="ubuntu">Ubuntu Mono</option>
                          </select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                          <button class="ql-video"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-formula"></button>
                          <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>
                      </div>
                      <div class="editor app-page_editor">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <h6 class="ml-1 mt-1">Image</h6>
                <div class="col s6 m3">
                  <input type="file" id="input-file-disable-remove" class="dropify" data-disable-remove="true" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 mt-2">
          <div>
            <h4>
              Faq's
            </h4>
          </div>
          <div class="card">
            <div class="card-content">
              <h4 class="card-title">Description</h4>
              <div class="row">
                <div class="col s12">
                  <div id="snow-wrapper2">
                    <div id="snow-container2">
                      <div class="quill-toolbar">
                        <span class="ql-formats">
                          <select class="ql-header browser-default">
                            <option value="1">Heading</option>
                            <option value="2">Subheading</option>
                            <option selected>Normal</option>
                          </select>
                          <select class="ql-font browser-default">
                            <option selected>Sailec Light</option>
                            <option value="sofia">Sofia Pro</option>
                            <option value="slabo">Slabo 27px</option>
                            <option value="roboto">Roboto Slab</option>
                            <option value="inconsolata">Inconsolata</option>
                            <option value="ubuntu">Ubuntu Mono</option>
                          </select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                          <button class="ql-video"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-formula"></button>
                          <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>
                      </div>
                      <div class="editor app-page_editor">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 mt-2">
          <div>
            <h4>
              Contact Us
            </h4>
          </div>
          <div class="card">
            <div class="card-content">
              <h4 class="card-title">Description</h4>
              <div class="row">
                <div class="col s12">
                  <div id="snow-wrapper3">
                    <div id="snow-container3">
                      <div class="quill-toolbar">
                        <span class="ql-formats">
                          <select class="ql-header browser-default">
                            <option value="1">Heading</option>
                            <option value="2">Subheading</option>
                            <option selected>Normal</option>
                          </select>
                          <select class="ql-font browser-default">
                            <option selected>Sailec Light</option>
                            <option value="sofia">Sofia Pro</option>
                            <option value="slabo">Slabo 27px</option>
                            <option value="roboto">Roboto Slab</option>
                            <option value="inconsolata">Inconsolata</option>
                            <option value="ubuntu">Ubuntu Mono</option>
                          </select>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                          <button class="ql-video"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-formula"></button>
                          <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>
                      </div>
                      <div class="editor app-page_editor">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 display-flex justify-content-end mt-3">
          <button type="submit" class="btn indigo">Save changes</button>
          <button type="button" class="btn ml-1 btn-light">Cancel</button>
        </div>
      </div>
    </section>
    <!-- Snow Editor end -->
  </form>

</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/quill/katex.min.js')}}"></script>
<script src="{{asset('vendors/quill/highlight.min.js')}}"></script>
<script src="{{asset('vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-editor.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection