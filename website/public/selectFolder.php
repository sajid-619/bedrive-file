<?php
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "anamedo444@gmail.com";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "disan1";

?>

<!doctype html>
<html lang="en">

<head>
  <title>Chọn File/Tài liệu - Edusoft</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./build/assets/main-c1a57cbb.css" data-keep="true" />

  <link rel="stylesheet" href="./css/selectFile.css" />
  <link rel="stylesheet" href="./css/tree_folder.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- JQuery UI -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>


<body>

  <div id="loadingPage" class="d-block loadingContent">
    <figure style="height: 100%;">
      <div class="onLoadingImage">
        <img src="./images/gif/onLoading.gif" alt="Loading...">

      </div>

      <figcaption style="text-align: center;">

        <div class="text ">
          Đang tải dữ liệu

          <div class="icon-dot-loading">
            <img src="./images/gif/blue-dot-loading.gif" alt="Dot loading">
          </div>
        </div>

      </figcaption>
    </figure>


  </div>
  <div id="root" class="d-none" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)">
    <div class="relative pointer-events-none"></div>
    <div class="relative isolate dashboard-grid h-screen">
      <div class="flex items-center justify-end gap-10  pl-14 pr-8 md:pl-20 md:pr-20 bg-primary text-on-primary border-b-primary h-54  border-b dashboard-grid-navbar">
        <div onclick="loadEntriesInfolder(null,'Tất cả File')" role="button" class="mr-4 d-flex justify-content-center align-items-center block h-full max-h-26 flex-shrink-0 md:mr-24 md:max-h-36" aria-label="Go to homepage" href="/">
          <i class="fa fa-home" aria-hidden="true"></i>
        </div>
        <button id="openLeftNav" data-toggle="collapse" data-target="#leftNav" type="button" class="focus-visible:ring bg-transparent border-transparent hover:bg-hover disabled:text-disabled disabled:bg-transparent whitespace-nowrap inline-flex align-middle flex-shrink-0 items-center transition-button duration-200 select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default rounded-full justify-center text-base h-42 w-42">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>

        </button>
        <form onsubmit="searchEntries(event)" action="#" class="flex-auto    max-w-620">
          <div class="form-group relative  d-flex align-self-center" style="margin-top:1.165rem ;">
            <input type="text" class="form-control" name="search" id="search" placeholder="Nhập để tìm kiếm ">
            <button type="submit" style="right: 3px; top:0" class="btn border-0 btn-light absolute">
              <i class="fa fa-search" aria-hidden="true"></i>

            </button>
          </div>
        </form>
        <div class="ml-auto flex items-center gap-4 md:gap-14">
          <button type="button" class="focus-visible:ring bg-transparent border-transparent hover:bg-hover disabled:text-disabled disabled:bg-transparent whitespace-nowrap inline-flex align-middle flex-shrink-0 items-center transition-button duration-200 select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default rounded-full justify-center text-base h-42 w-42">
            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="NotificationsOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
              <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z">
              </path>
            </svg></button>
          <span role="button" id=":r3:" aria-expanded="false" aria-haspopup="menu">
            <button type="button" class="focus-visible:ring bg-transparent border-transparent hover:bg-hover disabled:text-disabled disabled:bg-transparent whitespace-nowrap inline-flex align-middle flex-shrink-0 items-center transition-button duration-200 select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default rounded-full justify-center text-base h-42 w-42 md:hidden" role="presentation" aria-label="toggle authentication menu">
              <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="PersonOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
                <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                </path>
              </svg></button>

          </span>
        </div>
      </div>


      <div id="leftNav" class=" dashboard-grid-sidenav-left will-change-[width] overflow-hidden w-240">
        <div class="w-full h-full flex flex-col gap-20 border-r bg-alt text-sm font-medium text-muted">
          <div class="flex-auto">
            <div class="pt-3">
              <div class="d-flex tree-item justify-content-between">
                <div class="d-flex folder-name " role="button" aria-expanded="true" aria-controls="multiCollapseExample2">
                  <div role="button" class="mr-2 leaf text-center d-flex align-items-center  icon-angle-right-file">

                  </div>
                  <div role="button" onclick="loadEntriesInfolder(null,'Tất cả File')" class=" text-nowrap  h6 d-flex flex-nowrap align-items-center justify-content-center h-100 text-dark">

                    <img src="./public/images/icon/folder.png" width="14.5px" alt="">
                    <span class="pl-2 ">Thư mục gốc</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="px-12  text-center dropdown">

              <div class=" pt-0 " id="collapse-folder-null">
                <ul>

                </ul>
              </div>
              <!-- <button type="button" id=":r5:" aria-expanded="false" aria-haspopup="menu" data-toggle="dropdown" class="  text-light focus-visible:ring text-on-primary bg-primary border border-primary hover:bg-primary-dark hover:border-primary-dark disabled:text-disabled disabled:bg-disabled disabled:border-transparent disabled:shadow-none whitespace-nowrap inline-flex align-middle flex-shrink-0 items-center transition-button duration-200 select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default rounded justify-center font-semibold text-sm h-36 px-18 min-w-160">
                  <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="FileUploadOutlinedIcon" class="svg-icon  -ml-4 mr-2 icon-sm" height="1em" width="1em">
                    <path d="M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zM7 9l1.41 1.41L11 7.83V16h2V7.83l2.59 2.58L17 9l-5-5-5 5z">
                    </path>
                  </svg>Tải lên
                </button> -->
              <ul class="dropdown-menu sub-menu ">
                <li>
                  <div class="dropdown-item d-flex btn" onclick="clickUploadFile()" role="button">
                    <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="UploadFileOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
                        <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zM8 15.01l1.41 1.41L11 14.84V19h2v-4.16l1.59 1.59L16 15.01 12.01 11 8 15.01z"></path>
                      </svg></div>
                    <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tải lên files</div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-item d-flex btn" onclick="openFolderDiaglog()" role="button">
                    <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="DriveFolderUploadOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
                        <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l2 2H20v10zM9.41 14.42 11 12.84V17h2v-4.16l1.59 1.59L16 13.01 12.01 9 8 13.01l1.41 1.41z"></path>
                      </svg></div>
                    <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tải lên thư mục</div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-item d-flex btn" role="button" data-toggle="modal" data-target="#createFolder">
                    <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="CreateNewFolderOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
                        <path d="M20 6h-8l-2-2H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm0 12H4V6h5.17l2 2H20v10zm-8-4h2v2h2v-2h2v-2h-2v-2h-2v2h-2z"></path>
                      </svg></div>
                    <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tạo thư mục mới</div>
                  </div>
                </li>
              </ul>

            </div>
            <div class="text-muted pt-24 border-t mt-26 px-12">
              <span data-focus-scope-start="true" hidden></span>
              <ul class="overflow-hidden text-sm mb-1" role="tree">
                <li role="treeitem" aria-expanded="false" aria-selected="true" tabindex="0" class="outline-none [&amp;>.tree-label]:focus-visible:ring [&amp;>.tree-label]:focus-visible:ring-2 [&amp;>.tree-label]:focus-visible:ring-inset focus-visible:ring-2">
                  <div data-menu-item-id="dkj424" draggable="false" class="flex flex-nowrap whitespace-nowrap items-center gap-4 py-6 rounded header cursor-pointer overflow-hidden text-ellipsis tree-label h-40 bg-primary/selected text-primary font-bold">
                    <div>
                      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="ArrowRightOutlinedIcon" class="svg-icon icon-sm cursor-default transition-transform icon-md" height="1em" width="1em">
                        <path d="m10 17 5-5-5-5v10z"></path>
                      </svg>
                    </div>
                    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="BackupOutlinedIcon" class="svg-icon mr-6 icon-md" height="1em" width="1em">
                      <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zM8 13h2.55v3h2.9v-3H16l-4-4z">
                      </path>
                    </svg>
                    <div class="overflow-hidden text-ellipsis pr-6">
                      Tất cả
                    </div>
                  </div>
                </li>
              </ul>
              <span data-focus-scope-end="true" hidden></span>
              <div class="flex gap-0 flex-col items-start" data-menu-id="v01akw">
                <a data-menu-item-id="wkd771" class="d-none block text-decoration-none text-secondary whitespace-nowrap flex items-center justify-start gap-10 h-40 w-full  px-24 rounded hover:bg-hover outline-none focus-visible:ring-2"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="Icon" class="svg-icon icon-sm" height="1em" width="1em">
                    <path d="M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.89 1 1.98 1 3.15s-.37 2.26-1 3.15c.46.22.96.35 1.5.35z">
                    </path>
                  </svg>Chia sẻ với tôi</a>
                <a data-menu-item-id="jo2m1s" class=" block text-decoration-none text-secondary whitespace-nowrap flex items-center justify-start gap-10 h-40 w-full px-24 rounded hover:bg-hover outline-none focus-visible:ring-2" href="/drive/recent"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="Icon" class="svg-icon icon-sm" height="1em" width="1em">
                    <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.25 2.52.77-1.28-3.52-2.09V8z">
                    </path>
                  </svg>Gần đây</a>
                <a data-menu-item-id="4e6cie" class=" block text-decoration-none text-secondary whitespace-nowrap flex items-center justify-start gap-10 h-40 w-full  px-24 rounded hover:bg-hover outline-none focus-visible:ring-2" href="/drive/starred"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="Icon" class="svg-icon icon-sm" height="1em" width="1em">
                    <path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z">
                    </path>
                  </svg>Được gắn dấu sao</a>
                <a data-menu-item-id="h5p54n" class=" block text-decoration-none text-secondary whitespace-nowrap flex items-center justify-start gap-10 h-40 w-full  px-24 rounded hover:bg-hover outline-none focus-visible:ring-2" href="/drive/trash"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="Icon" class="svg-icon icon-sm" height="1em" width="1em">
                    <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z">
                    </path>
                  </svg>Thùng rác</a>
              </div>
            </div>
            <div class="pl-24 pt-24 mt-24 border-t flex items-start gap-16"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="StorageOutlinedIcon" class="svg-icon icon-md -mt-4 icon-md" height="1em" width="1em">
                <path d="M2 20h20v-4H2v4zm2-3h2v2H4v-2zM2 4v4h20V4H2zm4 3H4V5h2v2zm-4 7h20v-4H2v4zm2-3h2v2H4v-2z"></path>
              </svg>
              <div id="spaceAriaValueNow"  aria-valuenow="3.0634493827819824" aria-valuemin="0" aria-valuemax="100" aria-valuetext="" aria-labelledby=":r7:" role="meter progressbar" class="flex-auto max-w-144 min-w-42">
                <div class="h-4 rounded bg-primary-light overflow-hidden">
                  <div id="spaceUsed" class="bg-primary fill h-full transition-width duration-200 rounded-l" ></div>
                </div>
                <div class="flex gap-10 justify-between my-4 block first-letter:capitalize text-left whitespace-nowrap text-xs mb-4"><span id=":r7:"><span id="textSpaceUsed" class="whitespace-nowrap" > </span></span></div>
              </div>
            </div>
            
          </div>

        </div>
      </div>
      <div id="pathFolder" class=" px-8 md:px-26  flex items-center gap-20 border-b h-60 dashboard-grid-header">
        <div class="w-full min-w-0" aria-label="Breadcrumbs">
          <ol style="margin-top:1rem;" class="flex overflow-auto justify-start min-h-42" id="pathEntry">
            <li class="relative inline-flex min-w-0 flex-shrink-0 items-center justify-start text-lg">
              <div class="cursor-pointer overflow-hidden whitespace-nowrap rounded px-8 py-4 ">
                <button onclick="loadEntriesInfolder(null)" type="button" class=" hover:bg-hover focus-visible:ring whitespace-nowrap inline-flex select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default justify-center flex items-center gap-2 rounded focus-visible:ring-offset-4">
                  <span id="mode-set">Tất cả File</span>
                  <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="ArrowDropDownOutlinedIcon" class="svg-icon icon-md text-muted icon-md" height="1em" width="1em">
                    <path d="m7 10 5 5 5-5H7z"></path>
                  </svg>
                </button>

              </div>
            </li>
          </ol>
        </div>

      </div>
      <div id="showEntries" class=" relative outline-none overflow-y-auto stable-scrollbar dashboard-grid-content" tabindex="-1">
        <div class="relative flex min-h-full flex-col pt-10">

          <div class="border-0 relative flex-auto px-18 pb-18 md:px-24 " id="ariaClick">

            <div id="loading" class="d-block loadingContent">
              <figure style="height: 100%;">
                <div class="onLoadingImage">
                  <img src="./images/gif/onLoading.gif" alt="Loading...">

                </div>

                <figcaption style="text-align: center;">

                  <div class="text">
                    Đang tải dữ liệu

                    <div class="icon-dot-loading"><img src="./images/gif/blue-dot-loading.gif" alt="Dot loading"></div>
                  </div>

                </figcaption>
              </figure>


            </div>
            <div id="list-grid" class="file-grid-container d-block">
              <div class="file-grid">

              </div>
            </div>
            <div class="w-full" role="presentation">
              <div aria-hidden="true"></div>
            </div>
          </div>
          <div class="pointer-events-none absolute left-0 top-0 z-10 hidden border border-primary-light bg-primary-light/20 shadow-md">
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Modal tạo folder -->
  <div class="modal fade" id="createFolder" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="createFolderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createFolderLabel">Thư mục mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="name-new-folder" onchange="nameInputChange()" class="form-control" placeholder="Nhập tên thư mục mới !" required>
          <p class="text-danger d-none" style="font-weight: bold;">Tên thư mục không được trống !</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
          <button type="button" onclick="createFolder()" class="btn btn-primary">Tạo</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Raname -->
  <div class="modal fade " id="modalRename" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Đổi tên file </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="name-new-entry" onchange="nameInputChange()" class="form-control" placeholder="Nhập tên file mới !" required>
          <p class="text-danger d-none" style="font-weight: bold;">Tên file không được trống !</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
          <button type="button" class="btn btn-primary">Lưu</button>
        </div>
      </div>
    </div>
  </div>
  <!-- process upload -->
  <div id="process-upload" class="shadow-xl d-none rounded fixed bottom-16 right-16 bg z-modal border w-375 text-sm" style="opacity: 1; transform: translateY(0%) translateZ(0px);">
    <div class="px-10 bg-alt flex items-center gap-10 justify-between border-b min-h-[45px]">
      <div>Uploaded <span id="total-uploaded-file">0</span>/<span id="total-upload-file">0</span> files</div>
      <button type="button" onclick="closeProcessUpload()" class="focus-visible:ring bg-transparent border-transparent hover:bg-hover disabled:text-disabled disabled:bg-transparent whitespace-nowrap inline-flex align-middle flex-shrink-0 items-center transition-button duration-200 select-none appearance-none no-underline outline-none disabled:pointer-events-none disabled:cursor-default rounded-full justify-center text-sm h-36 w-36"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="CloseOutlinedIcon" class="svg-icon icon-sm" height="1em" width="1em">
          <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path>
        </svg></button>
    </div>
    <div class="max-h-320 overflow-y-auto">
      <div class="relative w-full" id="list-upload-file-process" style="height:200px">

      </div>
    </div>
  </div>
  <!-- input hiden upload file  -->
  <input type="file" id="fileInput" class="d-none" name="file" multiple>
  <!-- input hidden upload folder  -->
  <input type="file" id="folderInput" onchange="uploadFolder(event)" class="d-none" webkitdirectory directory multiple />

  <!-- dropdown upload menu -->
  <ul class="dropdown-menu sub-menu" id="contextMenu">
    <li>
      <div class="dropdown-item d-flex btn" onclick="clickUploadFile()" role="button">
        <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="UploadFileOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
            <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zM8 15.01l1.41 1.41L11 14.84V19h2v-4.16l1.59 1.59L16 15.01 12.01 11 8 15.01z"></path>
          </svg></div>
        <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tải lên files</div>
      </div>
    </li>
    <li>
      <div class="dropdown-item d-flex btn" onclick="openFolderDiaglog()" role="button">
        <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="DriveFolderUploadOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
            <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l2 2H20v10zM9.41 14.42 11 12.84V17h2v-4.16l1.59 1.59L16 13.01 12.01 9 8 13.01l1.41 1.41z"></path>
          </svg></div>
        <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tải lên thư mục</div>
      </div>
    </li>
    <li>
      <div class="dropdown-item d-flex btn" role="button" data-toggle="modal" data-target="#createFolder">
        <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="CreateNewFolderOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
            <path d="M20 6h-8l-2-2H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm0 12H4V6h5.17l2 2H20v10zm-8-4h2v2h2v-2h2v-2h-2v-2h-2v2h-2z"></path>
          </svg></div>
        <div class="mr-auto w-full text-sm d-flex align-items-center p-2 ">Tạo thư mục mới</div>
      </div>
    </li>
  </ul>
  <!-- context file sub menu -->
  <div id="context-file-sub-menu" class="z-popover isolate " role="presentation" style="--be-viewport-height: 421px; --be-viewport-width: 1872px; opacity: 1; transform: none; max-height: 379px; display:none"><span data-focus-scope-start="true" hidden=""></span>
    <div class="text-base sm:text-sm outline-none bg-paper max-h-inherit flex flex-col shadow-xl border  rounded max-w-288 min-w-180" role="presentation">
      <div tabindex="-1" role="menu" id=":r1g:-listbox" class="flex-auto overflow-y-auto overscroll-contain">

        <div id=":r1g:-listbox-3" role="button" tabindex="0" aria-selected="false" data-value="addToStarred" class="w-full select-none outline-none cursor-pointer py-8 text-sm truncate flex items-center gap-10 text-main px-20 hover:bg-hover">
          <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="StarOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
              <path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path>
            </svg></div>
          <div class="mr-auto w-full">Gán sao</div>
        </div>

        <div id=":r1g:-listbox-5" data-toggle="modal" data-target="#modalRename" role="button" tabindex="0" aria-selected="false" data-value="rename" class="w-full select-none outline-none cursor-pointer py-8 text-sm truncate flex items-center gap-10 text-main px-20 hover:bg-hover">
          <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="DriveFileRenameOutlineOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
              <path d="m15 16-4 4h10v-4zm-2.94-8.81L3 16.25V20h3.75l9.06-9.06-3.75-3.75zM5.92 18H5v-.92l7.06-7.06.92.92L5.92 18zm12.79-9.96c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
            </svg></div>
          <div class="mr-auto w-full">Đổi tên</div>
        </div>

        <div id=":r1g:-listbox-8" role="button" tabindex="-1" aria-selected="false" data-value="delete" class="w-full select-none outline-none cursor-pointer py-8 text-sm truncate flex items-center gap-10 text-main px-20 hover:bg-fg-base/15 ">
          <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="DeleteOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
              <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
            </svg></div>
          <div class="mr-auto w-full">Xoá</div>
        </div>
        <div id=":r4m:-listbox-3" role="button" tabindex="0" aria-selected="false" data-value="restore" class="w-full select-none outline-none cursor-pointer py-8 text-sm truncate flex items-center gap-10 text-main px-20 hover:bg-hover">
          <div class="icon-sm rounded overflow-hidden flex-shrink-0 text-muted"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-testid="RestoreOutlinedIcon" class="svg-icon icon-md" height="1em" width="1em">
              <path d="M13 3c-4.97 0-9 4.03-9 9H1l4 3.99L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.25 2.52.77-1.28-3.52-2.09V8z"></path>
            </svg></div>
          <div class="mr-auto w-full">Khôi phục</div>
        </div>
      </div>
    </div><span data-focus-scope-end="true" hidden=""></span>
  </div>

  <script>
    // document.domain="edusoft.vn"
    var user = {
      email: "<?php echo $email; ?>",
      password: "<?php echo $password; ?>",
      "token_name": "iphone 12"
    }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script src="./js/blankScreen.component.js"></script>
  <script type="text/javascript" src="./js/getIcon.js"></script>
  <script type="text/javascript" src="./js/treeFolder.js"></script>

  <script type="text/javascript" src="./js/selectFile.js"></script>

</body>

</html>