<!DOCTYPE html>
<html class="h-full" lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Speed WMS</title>
    <link href="./output.css" rel="stylesheet" />
     </head>
  <body class="min-h-full min-w-full text-sm">
    <!--Interface fenêtre + Paramètres-->
    <div class="grid grid-cols-2 print:hidden">
      <!--Interface fenêtre-->
      <div class="flex gap-4 text-gray-300">
        <img class="h-7" src="./assets/speedwms.jpg" alt="speed wms logo" />
        <h1>Environment : DELIS / Activité : DELIS</h1>
      </div>
      <!--Icones paramètres-->
      <div class="flex justify-end gap-7 print:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-up hover:text-[#C0C0C0]"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 11l5 -5l5 5" />
          <path d="M7 17l5 -5l5 5" />
        </svg>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-minus hover:text-[#C0C0C0]"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l14 0" />
        </svg>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-layers-intersect hover:text-[#C0C0C0]"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M8 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"
          />
          <path
            d="M4 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"
          />
        </svg>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-x hover:text-[#C0C0C0]"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M18 6l-12 12" />
          <path d="M6 6l12 12" />
        </svg>
      </div>
    </div>
    <!--Navbar première rubrique-->
    <div class="flex gap-1.5 mt-2 items-center text-base print:hidden">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2 hover:bg-[#E6E6E6] hover:cursor-pointer"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M4 6l16 0" />
        <path d="M4 12l16 0" />
        <path d="M4 18l16 0" />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:bg-[#E6E6E6] hover:cursor-pointer"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M6 9l6 6l6 -6" />
      </svg>
      <div class="btn-block bg-[#C0C0C0]">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 6l8 0" />
          <path d="M16 6l4 0" />
          <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 12l2 0" />
          <path d="M10 12l10 0" />
          <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 18l11 0" />
          <path d="M19 18l1 0" />
        </svg>
        <button type="button">Paramétrage</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="icon icon-tabler icons-tabler-filled icon-tabler-receipt"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M17 2a3 3 0 0 1 3 3v16a1 1 0 0 1 -1.555 .832l-2.318 -1.545l-1.42 1.42a1 1 0 0 1 -1.32 .083l-.094 -.083l-1.293 -1.292l-1.293 1.292a1 1 0 0 1 -1.32 .083l-.094 -.083l-1.421 -1.42l-2.317 1.545l-.019 .012l-.054 .03l-.028 .017l-.054 .023l-.05 .023l-.049 .015l-.06 .019l-.052 .009l-.057 .011l-.084 .006l-.026 .003h-.022l-.049 -.003h-.039l-.013 -.003h-.016l-.041 -.008l-.038 -.005l-.015 -.005l-.018 -.002l-.034 -.011l-.04 -.01l-.019 -.007l-.015 -.004l-.029 -.013l-.04 -.015l-.021 -.011l-.013 -.005l-.028 -.016l-.036 -.018l-.014 -.01l-.018 -.01l-.038 -.027l-.022 -.014l-.01 -.009l-.02 -.014l-.045 -.041l-.012 -.008l-.024 -.024l-.035 -.039l-.02 -.02l-.007 -.011l-.011 -.012l-.032 -.045l-.02 -.025l-.012 -.019l-.03 -.054l-.017 -.028l-.023 -.054l-.023 -.05a1 1 0 0 1 -.034 -.108l-.01 -.057l-.01 -.053l-.009 -.132v-16a3 3 0 0 1 3 -3zm-2 12h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0 -2m0 -4h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m0 -4h-6a1 1 0 1 0 0 2h6a1 1 0 0 0 0 -2"
          />
        </svg>
        <button type="button">Réception</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-packages"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
          <path d="M2 13.5v5.5l5 3" />
          <path d="M7 16.545l5 -3.03" />
          <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
          <path d="M12 19l5 3" />
          <path d="M17 16.5l5 -3" />
          <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
          <path d="M7 5.03v5.455" />
          <path d="M12 8l5 -3" />
        </svg>
        <button type="button">Stock</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-truck-loading"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M2 3h1a2 2 0 0 1 2 2v10a2 2 0 0 0 2 2h15" />
          <path
            d="M9 6m0 3a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-4a3 3 0 0 1 -3 -3z"
          />
          <path d="M9 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        </svg>
        <button type="button"><a href="./preparation.php">Préparation</a></button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
          <path d="M3 9l4 0" />
        </svg>
        <button type="button">Expédition</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-tools"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
          <path d="M14.5 5.5l4 4" />
          <path d="M12 8l-5 -5l-4 4l5 5" />
          <path d="M7 8l-1.5 1.5" />
          <path d="M16 12l5 5l-4 4l-5 -5" />
          <path d="M16 17l-1.5 1.5" />
        </svg>
        <button type="button">Agrès</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-building"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M3 21l18 0" />
          <path d="M9 8l1 0" />
          <path d="M9 12l1 0" />
          <path d="M9 16l1 0" />
          <path d="M14 8l1 0" />
          <path d="M14 12l1 0" />
          <path d="M14 16l1 0" />
          <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
        </svg>
        <button type="button">Fabrication</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M3 21v-13l9 -4l9 4v13" />
          <path d="M13 13h4v8h-10v-6h6" />
          <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
        </svg>
        <button type="button">Inventaire</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-hourglass-empty"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z"
          />
          <path
            d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z"
          />
        </svg>
        <button type="button">Charge</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-hexagons"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 18v-5l4 -2l4 2v5l-4 2z" />
          <path d="M8 11v-5l4 -2l4 2v5" />
          <path d="M12 13l4 -2l4 2v5l-4 2l-4 -2" />
        </svg>
        <button type="button">Divers</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 6l8 0" />
          <path d="M16 6l4 0" />
          <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 12l2 0" />
          <path d="M10 12l10 0" />
          <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
          <path d="M4 18l11 0" />
          <path d="M19 18l1 0" />
        </svg>
        <button type="button">Système</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-invoice"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M14 3v4a1 1 0 0 0 1 1h4" />
          <path
            d="M19 12v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-14a2 2 0 0 1 2 -2h7l5 5v4.25"
          />
        </svg>
        <button type="button">Facturation</button>
      </div>

      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"
          />
          <path
            d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"
          />
          <path d="M9 17v-5" />
          <path d="M12 17v-1" />
          <path d="M15 17v-3" />
        </svg>
        <button type="button">TMS</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="icon icon-tabler icons-tabler-filled icon-tabler-chart-donut"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M9.883 2.207a1.9 1.9 0 0 1 2.087 1.522l.025 .167l.005 .104v4a1 1 0 0 1 -.641 .933l-.107 .035a3.1 3.1 0 1 0 3.73 3.953l.05 -.173a1 1 0 0 1 .855 -.742l.113 -.006h3.8a2 2 0 0 1 2 2a1 1 0 0 1 -.026 .226a10 10 0 1 1 -12.27 -11.933l.27 -.067l.11 -.02z"
          />
          <path
            d="M14.775 2.526a.996 .996 0 0 1 .22 -.026l.122 .007l.112 .02l.103 .03a10 10 0 0 1 6.003 5.817l.108 .294a1 1 0 0 1 -.824 1.325l-.119 .007h-4.5a1 1 0 0 1 -.76 -.35a8 8 0 0 0 -.89 -.89a1 1 0 0 1 -.342 -.636l-.008 -.124v-4.495l.006 -.118c.005 -.042 .012 -.08 .02 -.116l.03 -.103a.998 .998 0 0 1 .168 -.299l.071 -.08c.03 -.028 .058 -.052 .087 -.075l.09 -.063l.088 -.05l.103 -.043l.112 -.032z"
          />
        </svg>
        <button type="button">Statistiques</button>
      </div>
      <div class="btn-block">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-search rotate-90"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
          <path d="M21 21l-6 -6" />
        </svg>
        <button type="button" class="text-nowrap">Tableaux de bord</button>
      </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col pb-2 print:hidden">
      <!--Navbar deuxième rubrique-->
      <div class="flex justify-between">
        <div class="btn-sblock">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-article size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M7 8h10" /><path d="M7 12h10" /><path d="M7 16h10" /></svg>
            <button type="button" class="underline underline-offset-8">Articles</button>
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="btn-sblock">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
            <button type="button" class="underline underline-offset-8">Tiers</button>
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="btn-sblock">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-drag-drop-2 size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /><path d="M4 4l0 .01" /><path d="M8 4l0 .01" /><path d="M12 4l0 .01" /><path d="M16 4l0 .01" /><path d="M4 8l0 .01" /><path d="M4 12l0 .01" /><path d="M4 16l0 .01" /></svg>
            <button type="button" class="underline underline-offset-8">Emplacements</button>
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="flex flex-col ml-4 items-center">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-truck size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /></svg>
          <p class=" cursor-default">Transport</p>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="btn-sblock">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 21c1.147 -4.02 1.983 -8.027 2 -12h6c.017 3.973 .853 7.98 2 12" /><path d="M12.5 13h4.5c.025 2.612 .894 5.296 2 8" /><path d="M9 5a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1" /><path d="M3 21l19 0" /></svg>
          <button type="button">
            Fabrication
          </button>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="btn-sblock">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-box size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
          <button type="button">
            Autres
          </button>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down hover:text-gray-500 cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="btn-sblock">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-assembly size-8 mt-4"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"
            />
            <path
              d="M15.5 9.422c.312 .18 .503 .515 .5 .876v3.277c0 .364 -.197 .7 -.515 .877l-3 1.922a1 1 0 0 1 -.97 0l-3 -1.922a1 1 0 0 1 -.515 -.876v-3.278c0 -.364 .197 -.7 .514 -.877l3 -1.79c.311 -.174 .69 -.174 1 0l3 1.79h-.014z"
            />
          </svg>
          <button type="button">Répartition</button>
        </div>
        <div class="btn-sblock">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-binary-tree size-8 mt-4"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 20a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
            <path d="M16 4a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
            <path d="M16 20a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
            <path d="M11 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
            <path d="M21 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />
            <path d="M5.058 18.306l2.88 -4.606" />
            <path d="M10.061 10.303l2.877 -4.604" />
            <path d="M10.065 13.705l2.876 4.6" />
            <path d="M15.063 5.7l2.881 4.61" />
          </svg>
          <button type="button">Modèles répartition</button>
        </div>

        <div class="border-l-2 border-l-[#A0A0A0] ml-2 h-14 mt-2"></div>

        <div class="btn-not-allowed">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-printer size-8 mt-4"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"
            />
            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
            <path
              d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"
            />
          </svg>
          <button type="button" class="hover:cursor-no-drop">Imprimer</button>
        </div>
        <div class="btn-not-allowed">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="icon icon-tabler icons-tabler-filled icon-tabler-tag rotate-90 size-8 mt-4"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M11.172 2a3 3 0 0 1 2.121 .879l7.71 7.71a3.41 3.41 0 0 1 0 4.822l-5.592 5.592a3.41 3.41 0 0 1 -4.822 0l-7.71 -7.71a3 3 0 0 1 -.879 -2.121v-5.172a4 4 0 0 1 4 -4zm-3.672 3.5a2 2 0 0 0 -1.995 1.85l-.005 .15a2 2 0 1 0 2 -2"
            />
          </svg>
          <button type="button" class="hover:cursor-no-drop">Etiquette</button>
        </div>
        <div class="flex flex-col ml-4 items-center mt-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-file-pencil size-8 cursor-pointer hover:text-[#C0C0C0]"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path
              d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
            />
            <path d="M10 18l5 -5a1.414 1.414 0 0 0 -2 -2l-5 5v2h2z" />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-refresh size-8 cursor-pointer hover:text-[#C0C0C0]"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
          </svg>
        </div>
        <div class="flex flex-col ml-4 items-center mt-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-trash size-8 hover:text-[#C0C0C0] cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 7l16 0" />
            <path d="M10 11l0 6" />
            <path d="M14 11l0 6" />
            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-plus border-[#97C48F] border-solid border-4 text-[#97C48F] rounded-full size-8 cursor-pointer hover:text-lime-800 hover:border-lime-800"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
          </svg>
        </div>

        <div class="border-l-2 border-l-[#A0A0A0] ml-2 h-14 mt-2"></div>

        <div class="flex flex-col ml-4 items-center text-nowrap">
          <div>
            <div class="flex gap-2 items-center hover:text-[#C0C0C0]">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-info-circle mr-1.5"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z"
                />
              </svg>
              <button type="button">Infos complémentaires</button>
            </div>
          </div>
          <div>
            <div class="flex gap-2 items-center -ml-6 hover:text-[#C0C0C0]">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-device-desktop"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10z"
                />
                <path d="M7 20h10" />
                <path d="M9 16v4" />
                <path d="M15 16v4" />
              </svg>
              <button type="button">Opérations diverses</button>
            </div>
          </div>
          <div>
            <div class="flex items-center gap-2 -ml-20 hover:text-[#C0C0C0]">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-folder-open ml-1.5"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M5 19l2.757 -7.351a1 1 0 0 1 .936 -.649h12.307a1 1 0 0 1 .986 1.164l-.996 5.211a2 2 0 0 1 -1.964 1.625h-14.026a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v2"
                />
              </svg>
              <button type="button">Documents</button>
            </div>
          </div>
          <div>
            <div
              class="flex items-center gap-2 -ml-[90px] hover:text-[#C0C0C0]"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"
                />
                <path d="M16 3l0 4" />
                <path d="M8 3l0 4" />
                <path d="M4 11l16 0" />
                <path d="M8 15h2v2h-2z" />
              </svg>
              <button type="button">Evènements</button>
            </div>
          </div>
        </div>

        <div class="border-l-2 border-l-[#A0A0A0] ml-2 h-14 mt-2"></div>

        <div class="flex flex-col ml-4 mt-2 items-center text-nowrap">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circles size-8 mt-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.5 12a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M17.5 12a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M12 2a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" /></svg>
          <button type="button" class="bg-[#C0C0C0] mt-1.5">
            Menu
          </button>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down absolute top-36 hover:text-[#C0C0C0] hover:cursor-pointer"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </div>
        <div class="border-l-2 border-l-[#A0A0A0] ml-2 h-14 mt-2"></div>
      </div>
      <div
        class="flex justify-around items-center bg-[#C0C0C0] text-white w-[92%] hover:cursor-default"
      >
        <p>Paramétrage</p>
        <p>Fonctions générales</p>
      </div>
    </div>
    <button
      type="button"
      class="mt-2 ml-2 border-solid bg-[#EDEDED] px-4 py-1.5 polygon print:hidden font-bold"
    >
      Articles
    </button>
<button
      type="button"
      class="mt-2 border-solid bg-[#EDEDED] px-4 py-1.5 polygon print:hidden text-gray-800 opacity-60"
    >
      Commandes
    </button>
    <div class="border-solid border-b-black border-b-2 print:hidden"></div>
    <div class="flex items-center gap-4 mt-2 text-lg text-gray-700">
    <div class="border-2 border-solid border-gray-500 w-fit px-2 ml-2">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x text-red-500"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
    </div>
    <p class="font-bold">Articles</p>
    </div>
    <form class="table px-4 w-full" action="parametrage.php" method="post">
                <div class="table-row">
                  <label for="client" class="text-nowrap text-gray-500 table-cell"
                    >Compte client
                  </label>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-search text-[#C0C0C0] table-cell"
                    id="client"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
                  <input type="text" id="client" disabled name="client" class="input-field hover:cursor-not-allowed table-cell mx-2 mt-2" />
                  <input type="text" id="client" disabled name="client" class="input-field hover:cursor-not-allowed table-cell px-32" />
</div>
                <div class="table-row">
                  <label for="article" class="text-nowrap text-gray-500 table-cell"
                    >Article
                  </label>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-search text-[#C0C0C0] table-cell"
                    id="article"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
                  <input type="text" id="article" name="article" class="input-field hover:cursor-not-allowed table-cell mx-2 mt-2" />
                  <input type="text" id="article" disabled name="article" class="input-field hover:cursor-not-allowed table-cell px-32" />
</div>
                <div class="table-row">
                  <label for="fournisseur" class="text-nowrap text-gray-500 table-cell"
                    >Fournisseur
                  </label>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-search text-[#C0C0C0] table-cell"
                    id="fournisseur"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
                  <input type="text" id="fournisseur" name="fournisseur" class="input-field hover:cursor-not-allowed table-cell mx-2 mt-2" />
                  <input type="text" id="fournisseur" disabled name="fournisseur" class="input-field hover:cursor-not-allowed table-cell px-32" />
</div>
                <div class="table-row">
                  <label for="famille" class="text-nowrap text-gray-500 table-cell"
                    >Famille
                  </label>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-search text-[#C0C0C0] table-cell"
                    id="famille"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
                  <input type="text" id="famille" disabled name="famille" class="input-field hover:cursor-not-allowed table-cell mx-2 mt-2 px-[283px]" />
</div>
<input type="submit" name="param" class="hidden">
</form>
        <div class="flex gap-2 mt-4 mx-2 items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-minimize"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 9l4 0l0 -4" />
              <path d="M3 3l6 6" />
              <path d="M5 15l4 0l0 4" />
              <path d="M3 21l6 -6" />
              <path d="M19 9l-4 0l0 -4" />
              <path d="M15 9l6 -6" />
              <path d="M19 15l-4 0l0 4" />
              <path d="M15 15l6 6" />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-refresh"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
              <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
            </svg>
            <label for="vue">Vue :</label>
            <select name="" id="vue" class="input-field ml-2 px-2">
              <option value="">Vue par défaut</option>
              <option value=""></option>
              <option value=""></option>
            </select>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M15 6l-6 6l6 6" />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 6l6 6l-6 6" />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M4 6l8 0" />
              <path d="M16 6l4 0" />
              <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M4 12l2 0" />
              <path d="M10 12l10 0" />
              <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M4 18l11 0" />
              <path d="M19 18l1 0" />
            </svg>
          </div>
   <table
            class="border-collapse border-2 border-solid border-gray-700 w-full print:block"
          >
            <thead class="bg-gray-500 text-white border-2 border-solid">
              <th scope="col" class="p-4 border-2 border-solid">Action</th>
              <th scope="col" class="p-4 border-2 border-solid">Cle unique Article (ART)</th>
              <th scope="col" class="p-4 border-2 border-solid">Code article</th>
              <th scope="col" class="p-4 border-2 border-solid">Code tiers fournisseur principal</th>
              <th scope="col" class="p-4 border-2 border-solid">Désignation longue</th>
              <th scope="col" class="p-4 border-2 border-solid">Date de creation</th>
              <th scope="col" class="p-4 border-2 border-solid">Prix</th>
              <th scope="col" class="p-4 border-2 border-solid">Quantite pour prix</th>
              <th scope="col" class="p-4 border-2 border-solid">FNC024 - Stock disponible</th>
              <th scope="col" class="p-4 border-2 border-solid">FNC002 - Stock global</th>
              <th scope="col" class="p-4 border-2 border-solid">Top produit fabricable</th>
            </thead>
<tbody>
<?php
include "./database.php";
// fetch data
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)) {
    echo "<tr class='border-2 border-solid'>";
    echo "<td class='p-4 border-2 border-solid'>N/A</td>";
    foreach ($row as $r) {
        if ($r instanceof DateTime) {
            echo "<td class='p-4 border-2 border-solid'>{$r->format('m-d-Y')}</td>";
        } else {
            echo "<td class='p-4 border-2 border-solid'>$r</td>";
        }
    }
    echo "<td class='p-4 border-2 border-solid'><input type='checkbox' name='produit'></td>";
    echo "</tr>\n";
}

sqlsrv_free_stmt($stmt);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
</tbody>
</table>
</body>
</html>

