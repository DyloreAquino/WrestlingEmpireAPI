<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.10.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.10.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-wrestlers">
                                <a href="#endpoints-GETapi-v1-wrestlers">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-wrestlers">
                                <a href="#endpoints-POSTapi-v1-wrestlers">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-wrestlers--id-">
                                <a href="#endpoints-GETapi-v1-wrestlers--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-wrestlers--id-">
                                <a href="#endpoints-PUTapi-v1-wrestlers--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-wrestlers--id-">
                                <a href="#endpoints-DELETEapi-v1-wrestlers--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-championships">
                                <a href="#endpoints-GETapi-v1-championships">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-championships">
                                <a href="#endpoints-POSTapi-v1-championships">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-championships--id-">
                                <a href="#endpoints-GETapi-v1-championships--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-championships--id-">
                                <a href="#endpoints-PUTapi-v1-championships--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-championships--id-">
                                <a href="#endpoints-DELETEapi-v1-championships--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-events">
                                <a href="#endpoints-GETapi-v1-events">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-events">
                                <a href="#endpoints-POSTapi-v1-events">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-events--id-">
                                <a href="#endpoints-GETapi-v1-events--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-events--id-">
                                <a href="#endpoints-PUTapi-v1-events--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-events--id-">
                                <a href="#endpoints-DELETEapi-v1-events--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-shows">
                                <a href="#endpoints-GETapi-v1-shows">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-shows">
                                <a href="#endpoints-POSTapi-v1-shows">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-shows--id-">
                                <a href="#endpoints-GETapi-v1-shows--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-shows--id-">
                                <a href="#endpoints-PUTapi-v1-shows--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-shows--id-">
                                <a href="#endpoints-DELETEapi-v1-shows--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-teams">
                                <a href="#endpoints-GETapi-v1-teams">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-teams">
                                <a href="#endpoints-POSTapi-v1-teams">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-teams--id-">
                                <a href="#endpoints-GETapi-v1-teams--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-teams--id-">
                                <a href="#endpoints-PUTapi-v1-teams--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-teams--id-">
                                <a href="#endpoints-DELETEapi-v1-teams--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-title_reigns">
                                <a href="#endpoints-GETapi-v1-title_reigns">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-title_reigns">
                                <a href="#endpoints-POSTapi-v1-title_reigns">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-title_reigns--id-">
                                <a href="#endpoints-GETapi-v1-title_reigns--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-title_reigns--id-">
                                <a href="#endpoints-PUTapi-v1-title_reigns--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-title_reigns--id-">
                                <a href="#endpoints-DELETEapi-v1-title_reigns--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-match_types">
                                <a href="#endpoints-GETapi-v1-match_types">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-match_types--id-">
                                <a href="#endpoints-GETapi-v1-match_types--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-promotions">
                                <a href="#endpoints-GETapi-v1-promotions">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-promotions--id-">
                                <a href="#endpoints-GETapi-v1-promotions--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-stipulations">
                                <a href="#endpoints-GETapi-v1-stipulations">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-stipulations--id-">
                                <a href="#endpoints-GETapi-v1-stipulations--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-territories">
                                <a href="#endpoints-GETapi-v1-territories">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-territories--id-">
                                <a href="#endpoints-GETapi-v1-territories--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-events--event_id--wrestlers">
                                <a href="#endpoints-PUTapi-v1-events--event_id--wrestlers">Special POST function to assign wrestlers to event</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-events--event_id--simulate">
                                <a href="#endpoints-PATCHapi-v1-events--event_id--simulate">Special PATCH function to simulate an event
Modifies the is_winner and finish_type of the event_wrestler row</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-events--event_id--stipulations">
                                <a href="#endpoints-PUTapi-v1-events--event_id--stipulations">Special POST function to assign stipulations to event</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-title_reigns--titleReign_id--wrestlers">
                                <a href="#endpoints-PUTapi-v1-title_reigns--titleReign_id--wrestlers">Special POST function to assign wrestlers to a title reign.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-title_reigns--titleReign_id--end">
                                <a href="#endpoints-PATCHapi-v1-title_reigns--titleReign_id--end">Special PATCH function to end a title reign
Updates the end dates</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-teams--team_id--wrestlers">
                                <a href="#endpoints-PUTapi-v1-teams--team_id--wrestlers">Special POST function to assign wrestlers to a team.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-teams--team_id--wrestlers">
                                <a href="#endpoints-POSTapi-v1-teams--team_id--wrestlers">Special PUT function to add more wrestlers to a team.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-teams--team_id--end">
                                <a href="#endpoints-PATCHapi-v1-teams--team_id--end">Special PATCH function to end a title reign
Updates the end dates</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 1, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-wrestlers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-wrestlers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Timmy Renner&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;v&quot;,
            &quot;allegiance&quot;: &quot;FACE&quot;,
            &quot;role&quot;: &quot;MANAGER&quot;,
            &quot;territoryId&quot;: 8,
            &quot;promotionId&quot;: 3,
            &quot;popularity&quot;: 92,
            &quot;strength&quot;: 84,
            &quot;skill&quot;: 83,
            &quot;agility&quot;: 60,
            &quot;stamina&quot;: 55,
            &quot;attitude&quot;: 66,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Elissa Stamm&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;i&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 18,
            &quot;promotionId&quot;: 6,
            &quot;popularity&quot;: 72,
            &quot;strength&quot;: 58,
            &quot;skill&quot;: 65,
            &quot;agility&quot;: 68,
            &quot;stamina&quot;: 73,
            &quot;attitude&quot;: 52,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Amani Ruecker&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;o&quot;,
            &quot;allegiance&quot;: &quot;FACE&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 27,
            &quot;promotionId&quot;: 1,
            &quot;popularity&quot;: 56,
            &quot;strength&quot;: 57,
            &quot;skill&quot;: 93,
            &quot;agility&quot;: 60,
            &quot;stamina&quot;: 68,
            &quot;attitude&quot;: 62,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Krystal Carroll&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;s&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;BOOKER&quot;,
            &quot;territoryId&quot;: 28,
            &quot;promotionId&quot;: 7,
            &quot;popularity&quot;: 93,
            &quot;strength&quot;: 52,
            &quot;skill&quot;: 59,
            &quot;agility&quot;: 95,
            &quot;stamina&quot;: 78,
            &quot;attitude&quot;: 56,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;d&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;BOOKER&quot;,
            &quot;territoryId&quot;: 23,
            &quot;promotionId&quot;: 7,
            &quot;popularity&quot;: 79,
            &quot;strength&quot;: 83,
            &quot;skill&quot;: 57,
            &quot;agility&quot;: 69,
            &quot;stamina&quot;: 67,
            &quot;attitude&quot;: 68,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Broderick Nolan&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;t&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;MANAGER&quot;,
            &quot;territoryId&quot;: 19,
            &quot;promotionId&quot;: 1,
            &quot;popularity&quot;: 95,
            &quot;strength&quot;: 89,
            &quot;skill&quot;: 73,
            &quot;agility&quot;: 59,
            &quot;stamina&quot;: 54,
            &quot;attitude&quot;: 69,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Viola Hilpert&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;p&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 35,
            &quot;promotionId&quot;: 9,
            &quot;popularity&quot;: 65,
            &quot;strength&quot;: 81,
            &quot;skill&quot;: 86,
            &quot;agility&quot;: 61,
            &quot;stamina&quot;: 70,
            &quot;attitude&quot;: 73,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;a&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;WRESTLER&quot;,
            &quot;territoryId&quot;: 36,
            &quot;promotionId&quot;: 7,
            &quot;popularity&quot;: 86,
            &quot;strength&quot;: 63,
            &quot;skill&quot;: 64,
            &quot;agility&quot;: 51,
            &quot;stamina&quot;: 59,
            &quot;attitude&quot;: 85,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Karlie Boyer&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;s&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;WRESTLER&quot;,
            &quot;territoryId&quot;: 27,
            &quot;promotionId&quot;: 8,
            &quot;popularity&quot;: 69,
            &quot;strength&quot;: 85,
            &quot;skill&quot;: 63,
            &quot;agility&quot;: 87,
            &quot;stamina&quot;: 99,
            &quot;attitude&quot;: 64,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Finn Rogahn&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;k&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 4,
            &quot;promotionId&quot;: 8,
            &quot;popularity&quot;: 54,
            &quot;strength&quot;: 97,
            &quot;skill&quot;: 71,
            &quot;agility&quot;: 67,
            &quot;stamina&quot;: 69,
            &quot;attitude&quot;: 63,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Raina Schaden&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;u&quot;,
            &quot;allegiance&quot;: &quot;FACE&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 22,
            &quot;promotionId&quot;: 4,
            &quot;popularity&quot;: 75,
            &quot;strength&quot;: 59,
            &quot;skill&quot;: 81,
            &quot;agility&quot;: 70,
            &quot;stamina&quot;: 82,
            &quot;attitude&quot;: 92,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;p&quot;,
            &quot;allegiance&quot;: &quot;FACE&quot;,
            &quot;role&quot;: &quot;MANAGER&quot;,
            &quot;territoryId&quot;: 16,
            &quot;promotionId&quot;: 3,
            &quot;popularity&quot;: 84,
            &quot;strength&quot;: 73,
            &quot;skill&quot;: 78,
            &quot;agility&quot;: 93,
            &quot;stamina&quot;: 59,
            &quot;attitude&quot;: 64,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;p&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 33,
            &quot;promotionId&quot;: 3,
            &quot;popularity&quot;: 63,
            &quot;strength&quot;: 71,
            &quot;skill&quot;: 56,
            &quot;agility&quot;: 51,
            &quot;stamina&quot;: 70,
            &quot;attitude&quot;: 57,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 14,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;i&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 18,
            &quot;promotionId&quot;: 8,
            &quot;popularity&quot;: 73,
            &quot;strength&quot;: 95,
            &quot;skill&quot;: 88,
            &quot;agility&quot;: 81,
            &quot;stamina&quot;: 60,
            &quot;attitude&quot;: 65,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 15,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Shanie McClure&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;f&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 41,
            &quot;promotionId&quot;: 4,
            &quot;popularity&quot;: 56,
            &quot;strength&quot;: 54,
            &quot;skill&quot;: 70,
            &quot;agility&quot;: 57,
            &quot;stamina&quot;: 50,
            &quot;attitude&quot;: 71,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 16,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;o&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;WRESTLER&quot;,
            &quot;territoryId&quot;: 25,
            &quot;promotionId&quot;: 6,
            &quot;popularity&quot;: 82,
            &quot;strength&quot;: 86,
            &quot;skill&quot;: 87,
            &quot;agility&quot;: 53,
            &quot;stamina&quot;: 96,
            &quot;attitude&quot;: 92,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 17,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;j&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;REFEREE&quot;,
            &quot;territoryId&quot;: 26,
            &quot;promotionId&quot;: 4,
            &quot;popularity&quot;: 80,
            &quot;strength&quot;: 68,
            &quot;skill&quot;: 50,
            &quot;agility&quot;: 88,
            &quot;stamina&quot;: 64,
            &quot;attitude&quot;: 60,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 18,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Hermina Schumm&quot;,
            &quot;gender&quot;: &quot;FEMALE&quot;,
            &quot;finisherName&quot;: &quot;z&quot;,
            &quot;allegiance&quot;: &quot;TWEENER&quot;,
            &quot;role&quot;: &quot;BOOKER&quot;,
            &quot;territoryId&quot;: 5,
            &quot;promotionId&quot;: 4,
            &quot;popularity&quot;: 66,
            &quot;strength&quot;: 60,
            &quot;skill&quot;: 76,
            &quot;agility&quot;: 61,
            &quot;stamina&quot;: 78,
            &quot;attitude&quot;: 80,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 19,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Alfredo Trantow&quot;,
            &quot;gender&quot;: &quot;MALE&quot;,
            &quot;finisherName&quot;: &quot;g&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;WRESTLER&quot;,
            &quot;territoryId&quot;: 46,
            &quot;promotionId&quot;: 7,
            &quot;popularity&quot;: 95,
            &quot;strength&quot;: 63,
            &quot;skill&quot;: 94,
            &quot;agility&quot;: 67,
            &quot;stamina&quot;: 83,
            &quot;attitude&quot;: 86,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        },
        {
            &quot;id&quot;: 20,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
            &quot;gender&quot;: &quot;N/A&quot;,
            &quot;finisherName&quot;: &quot;y&quot;,
            &quot;allegiance&quot;: &quot;HEEL&quot;,
            &quot;role&quot;: &quot;MANAGER&quot;,
            &quot;territoryId&quot;: 40,
            &quot;promotionId&quot;: 9,
            &quot;popularity&quot;: 92,
            &quot;strength&quot;: 97,
            &quot;skill&quot;: 70,
            &quot;agility&quot;: 55,
            &quot;stamina&quot;: 76,
            &quot;attitude&quot;: 90,
            &quot;managerId&quot;: null,
            &quot;partnerId&quot;: null,
            &quot;storyFriendId&quot;: null,
            &quot;storyEnemyId&quot;: null,
            &quot;realFriendId&quot;: null,
            &quot;realEnemyId&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-wrestlers" data-method="GET"
      data-path="api/v1/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-wrestlers"
                    onclick="tryItOut('GETapi-v1-wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-wrestlers"
                    onclick="cancelTryOut('GETapi-v1-wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-wrestlers">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"gender\": \"N\\/A\",
    \"finisherName\": \"architecto\",
    \"allegiance\": \"HEEL\",
    \"role\": \"WRESTLER\",
    \"territoryId\": 16,
    \"promotionId\": 16,
    \"popularity\": 22,
    \"strength\": 7,
    \"skill\": 16,
    \"agility\": 17,
    \"stamina\": 15,
    \"attitude\": 8,
    \"managerId\": 16,
    \"partnerId\": 16,
    \"storyFriendId\": 16,
    \"storyEnemyId\": 16,
    \"realFriendId\": 16,
    \"realEnemyId\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "gender": "N\/A",
    "finisherName": "architecto",
    "allegiance": "HEEL",
    "role": "WRESTLER",
    "territoryId": 16,
    "promotionId": 16,
    "popularity": 22,
    "strength": 7,
    "skill": 16,
    "agility": 17,
    "stamina": 15,
    "attitude": 8,
    "managerId": 16,
    "partnerId": 16,
    "storyFriendId": 16,
    "storyEnemyId": 16,
    "realFriendId": 16,
    "realEnemyId": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wrestlers">
</span>
<span id="execution-results-POSTapi-v1-wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-wrestlers" data-method="POST"
      data-path="api/v1/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-wrestlers"
                    onclick="tryItOut('POSTapi-v1-wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-wrestlers"
                    onclick="cancelTryOut('POSTapi-v1-wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-wrestlers"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="POSTapi-v1-wrestlers"
               value="N/A"
               data-component="body">
    <br>
<p>Example: <code>N/A</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>MALE</code></li> <li><code>FEMALE</code></li> <li><code>N/A</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>finisherName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="finisherName"                data-endpoint="POSTapi-v1-wrestlers"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>allegiance</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="allegiance"                data-endpoint="POSTapi-v1-wrestlers"
               value="HEEL"
               data-component="body">
    <br>
<p>Example: <code>HEEL</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>HEEL</code></li> <li><code>FACE</code></li> <li><code>TWEENER</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-v1-wrestlers"
               value="WRESTLER"
               data-component="body">
    <br>
<p>Example: <code>WRESTLER</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>WRESTLER</code></li> <li><code>MANAGER</code></li> <li><code>BOOKER</code></li> <li><code>REFEREE</code></li> <li><code>CIVILIAN</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>territoryId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="territoryId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>promotionId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="promotionId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>popularity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="popularity"                data-endpoint="POSTapi-v1-wrestlers"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>strength</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="strength"                data-endpoint="POSTapi-v1-wrestlers"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>skill</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agility</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="agility"                data-endpoint="POSTapi-v1-wrestlers"
               value="17"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stamina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stamina"                data-endpoint="POSTapi-v1-wrestlers"
               value="15"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attitude</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="attitude"                data-endpoint="POSTapi-v1-wrestlers"
               value="8"
               data-component="body">
    <br>
<p>Must be at least 50. Must not be greater than 100. Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>managerId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="managerId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>partnerId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="partnerId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>storyFriendId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="storyFriendId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>storyEnemyId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="storyEnemyId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>realFriendId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="realFriendId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>realEnemyId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="realEnemyId"                data-endpoint="POSTapi-v1-wrestlers"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-wrestlers--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-wrestlers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/wrestlers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wrestlers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-wrestlers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
        &quot;name&quot;: &quot;Timmy Renner&quot;,
        &quot;gender&quot;: &quot;MALE&quot;,
        &quot;finisherName&quot;: &quot;v&quot;,
        &quot;allegiance&quot;: &quot;FACE&quot;,
        &quot;role&quot;: &quot;MANAGER&quot;,
        &quot;territoryId&quot;: 8,
        &quot;promotionId&quot;: 3,
        &quot;popularity&quot;: 92,
        &quot;strength&quot;: 84,
        &quot;skill&quot;: 83,
        &quot;agility&quot;: 60,
        &quot;stamina&quot;: 55,
        &quot;attitude&quot;: 66,
        &quot;managerId&quot;: null,
        &quot;partnerId&quot;: null,
        &quot;storyFriendId&quot;: null,
        &quot;storyEnemyId&quot;: null,
        &quot;realFriendId&quot;: null,
        &quot;realEnemyId&quot;: null,
        &quot;events&quot;: [
            {
                &quot;id&quot;: 48,
                &quot;type&quot;: &quot;PROMO&quot;,
                &quot;placement&quot;: &quot;UNDER&quot;,
                &quot;matchTypeId&quot;: null,
                &quot;championshipId&quot;: null,
                &quot;showId&quot;: 27,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 0,
                &quot;finishType&quot;: &quot;TIMEOUT&quot;
            },
            {
                &quot;id&quot;: 24,
                &quot;type&quot;: &quot;PROMO&quot;,
                &quot;placement&quot;: &quot;SEMI&quot;,
                &quot;matchTypeId&quot;: null,
                &quot;championshipId&quot;: 24,
                &quot;showId&quot;: 22,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 1,
                &quot;finishType&quot;: &quot;SUBMISSION&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;type&quot;: &quot;MATCH&quot;,
                &quot;placement&quot;: &quot;MID&quot;,
                &quot;matchTypeId&quot;: 7,
                &quot;championshipId&quot;: 11,
                &quot;showId&quot;: 12,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 0,
                &quot;finishType&quot;: &quot;COUNTOUT&quot;
            },
            {
                &quot;id&quot;: 27,
                &quot;type&quot;: &quot;MATCH&quot;,
                &quot;placement&quot;: &quot;MID&quot;,
                &quot;matchTypeId&quot;: 4,
                &quot;championshipId&quot;: 26,
                &quot;showId&quot;: 18,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 1,
                &quot;finishType&quot;: &quot;SPECIAL&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;type&quot;: &quot;MATCH&quot;,
                &quot;placement&quot;: &quot;UNDER&quot;,
                &quot;matchTypeId&quot;: 2,
                &quot;championshipId&quot;: null,
                &quot;showId&quot;: 5,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 1,
                &quot;finishType&quot;: &quot;SPECIAL&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;type&quot;: &quot;PROMO&quot;,
                &quot;placement&quot;: &quot;MID&quot;,
                &quot;matchTypeId&quot;: null,
                &quot;championshipId&quot;: null,
                &quot;showId&quot;: 14,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;isWinner&quot;: 1,
                &quot;finishType&quot;: &quot;PIN&quot;
            }
        ],
        &quot;titleReigns&quot;: [
            {
                &quot;id&quot;: 16,
                &quot;championshipId&quot;: 4,
                &quot;yearStart&quot;: 2021,
                &quot;monthStart&quot;: 7,
                &quot;weekStart&quot;: 2,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 21,
                &quot;championshipId&quot;: 6,
                &quot;yearStart&quot;: 1987,
                &quot;monthStart&quot;: 11,
                &quot;weekStart&quot;: 3,
                &quot;yearEnd&quot;: 2003,
                &quot;monthEnd&quot;: 8,
                &quot;weekEnd&quot;: 2,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 22,
                &quot;championshipId&quot;: 6,
                &quot;yearStart&quot;: 1970,
                &quot;monthStart&quot;: 3,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: 1975,
                &quot;monthEnd&quot;: 5,
                &quot;weekEnd&quot;: 2,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 26,
                &quot;championshipId&quot;: 6,
                &quot;yearStart&quot;: 2001,
                &quot;monthStart&quot;: 3,
                &quot;weekStart&quot;: 3,
                &quot;yearEnd&quot;: 2000,
                &quot;monthEnd&quot;: 10,
                &quot;weekEnd&quot;: 4,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 29,
                &quot;championshipId&quot;: 7,
                &quot;yearStart&quot;: 1979,
                &quot;monthStart&quot;: 1,
                &quot;weekStart&quot;: 2,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 31,
                &quot;championshipId&quot;: 7,
                &quot;yearStart&quot;: 2021,
                &quot;monthStart&quot;: 1,
                &quot;weekStart&quot;: 2,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 38,
                &quot;championshipId&quot;: 8,
                &quot;yearStart&quot;: 2019,
                &quot;monthStart&quot;: 7,
                &quot;weekStart&quot;: 1,
                &quot;yearEnd&quot;: 1995,
                &quot;monthEnd&quot;: 8,
                &quot;weekEnd&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 63,
                &quot;championshipId&quot;: 36,
                &quot;yearStart&quot;: 2023,
                &quot;monthStart&quot;: 2,
                &quot;weekStart&quot;: 1,
                &quot;yearEnd&quot;: 2003,
                &quot;monthEnd&quot;: 5,
                &quot;weekEnd&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
            },
            {
                &quot;id&quot;: 66,
                &quot;championshipId&quot;: 39,
                &quot;yearStart&quot;: 2007,
                &quot;monthStart&quot;: 10,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
            }
        ],
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Prof. Georgianna Paucek MD&quot;,
                &quot;yearStart&quot;: 2020,
                &quot;monthStart&quot;: 5,
                &quot;weekStart&quot;: 3,
                &quot;yearEnd&quot;: 2012,
                &quot;monthEnd&quot;: 7,
                &quot;weekEnd&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Anna Nikolaus&quot;,
                &quot;yearStart&quot;: 2019,
                &quot;monthStart&quot;: 5,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Dr. Cortney Reichert&quot;,
                &quot;yearStart&quot;: 2022,
                &quot;monthStart&quot;: 3,
                &quot;weekStart&quot;: 3,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-wrestlers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-wrestlers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-wrestlers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-wrestlers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-wrestlers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-wrestlers--id-" data-method="GET"
      data-path="api/v1/wrestlers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-wrestlers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-wrestlers--id-"
                    onclick="tryItOut('GETapi-v1-wrestlers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-wrestlers--id-"
                    onclick="cancelTryOut('GETapi-v1-wrestlers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-wrestlers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/wrestlers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-wrestlers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the wrestler. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-wrestlers--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-wrestlers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/wrestlers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wrestlers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-wrestlers--id-">
</span>
<span id="execution-results-PUTapi-v1-wrestlers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-wrestlers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-wrestlers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-wrestlers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-wrestlers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-wrestlers--id-" data-method="PUT"
      data-path="api/v1/wrestlers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-wrestlers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-wrestlers--id-"
                    onclick="tryItOut('PUTapi-v1-wrestlers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-wrestlers--id-"
                    onclick="cancelTryOut('PUTapi-v1-wrestlers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-wrestlers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/wrestlers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/wrestlers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-wrestlers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the wrestler. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-wrestlers--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-wrestlers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/wrestlers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wrestlers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-wrestlers--id-">
</span>
<span id="execution-results-DELETEapi-v1-wrestlers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-wrestlers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-wrestlers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-wrestlers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-wrestlers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-wrestlers--id-" data-method="DELETE"
      data-path="api/v1/wrestlers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-wrestlers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-wrestlers--id-"
                    onclick="tryItOut('DELETEapi-v1-wrestlers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-wrestlers--id-"
                    onclick="cancelTryOut('DELETEapi-v1-wrestlers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-wrestlers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/wrestlers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-wrestlers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-wrestlers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the wrestler. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-championships">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-championships">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/championships" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/championships"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-championships">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Rosella Beer&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Prof. Dayna Zboncak V&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Ransom Fisher&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Clare Fisher MD&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Elisha Thiel&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Dr. Sonya Wolf&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Ms. Norene Smith II&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Kara Gibson&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Lela Turner&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Rosalee Hartmann&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Gerry Nienow&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Camylle Rolfson&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Cortez Huel&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Monserrat Monahan&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Oswald Mitchell&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Araceli Dietrich&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;Estrella Ebert&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Mr. Martin Weimann&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Mr. Kristopher Bergnaum&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;Ardella Conn&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;Enos Kiehn&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Mr. Clint Wisoky MD&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;Ines Cole&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Prof. Mabelle Weissnat MD&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;Reed Stoltenberg&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;Mrs. Una Beier I&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Dr. Austin Daniel MD&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Jadyn Reynolds PhD&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Amiya Marvin&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Travon Sipes&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Laura Wilderman&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;Prof. Grover Considine DDS&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Marlen Abernathy&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Oswald Senger&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Palma Steuber&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Autumn Bailey&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;Maybell Schimmel&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;Mr. Cornell Considine I&quot;,
            &quot;division&quot;: &quot;TAG&quot;,
            &quot;promotionId&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;Elza Lehner&quot;,
            &quot;division&quot;: &quot;WORLD&quot;,
            &quot;promotionId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Kaycee Brekke III&quot;,
            &quot;division&quot;: &quot;WOMENS&quot;,
            &quot;promotionId&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 41,
            &quot;name&quot;: &quot;Jevon Feil&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Miss Arianna Rosenbaum II&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Granville Watsica&quot;,
            &quot;division&quot;: &quot;MID&quot;,
            &quot;promotionId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-championships" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-championships"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-championships"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-championships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-championships">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-championships" data-method="GET"
      data-path="api/v1/championships"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-championships', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-championships"
                    onclick="tryItOut('GETapi-v1-championships');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-championships"
                    onclick="cancelTryOut('GETapi-v1-championships');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-championships"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/championships</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-championships"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-championships"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-championships">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-championships">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/championships" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"division\": \"WORLD\",
    \"promotionId\": 4326.41688
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/championships"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "division": "WORLD",
    "promotionId": 4326.41688
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-championships">
</span>
<span id="execution-results-POSTapi-v1-championships" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-championships"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-championships"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-championships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-championships">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-championships" data-method="POST"
      data-path="api/v1/championships"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-championships', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-championships"
                    onclick="tryItOut('POSTapi-v1-championships');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-championships"
                    onclick="cancelTryOut('POSTapi-v1-championships');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-championships"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/championships</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-championships"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-championships"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-championships"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>division</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="division"                data-endpoint="POSTapi-v1-championships"
               value="WORLD"
               data-component="body">
    <br>
<p>Example: <code>WORLD</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>TAG</code></li> <li><code>WORLD</code></li> <li><code>MID</code></li> <li><code>WOMENS</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>promotionId</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="promotionId"                data-endpoint="POSTapi-v1-championships"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-championships--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-championships--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/championships/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/championships/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-championships--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Rosella Beer&quot;,
        &quot;division&quot;: &quot;WOMENS&quot;,
        &quot;promotionId&quot;: 7,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;titleReigns&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;championshipId&quot;: 1,
                &quot;yearStart&quot;: 1996,
                &quot;monthStart&quot;: 6,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: 1998,
                &quot;monthEnd&quot;: 3,
                &quot;weekEnd&quot;: 4,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T08:05:57.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Elissa Stamm&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;i&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 18,
                        &quot;promotionId&quot;: 6,
                        &quot;popularity&quot;: 72,
                        &quot;strength&quot;: 58,
                        &quot;skill&quot;: 65,
                        &quot;agility&quot;: 68,
                        &quot;stamina&quot;: 73,
                        &quot;attitude&quot;: 52,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Amani Ruecker&quot;,
                        &quot;gender&quot;: &quot;N/A&quot;,
                        &quot;finisherName&quot;: &quot;o&quot;,
                        &quot;allegiance&quot;: &quot;FACE&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 27,
                        &quot;promotionId&quot;: 1,
                        &quot;popularity&quot;: 56,
                        &quot;strength&quot;: 57,
                        &quot;skill&quot;: 93,
                        &quot;agility&quot;: 60,
                        &quot;stamina&quot;: 68,
                        &quot;attitude&quot;: 62,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    }
                ]
            },
            {
                &quot;id&quot;: 2,
                &quot;championshipId&quot;: 1,
                &quot;yearStart&quot;: 1978,
                &quot;monthStart&quot;: 7,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: 2007,
                &quot;monthEnd&quot;: 3,
                &quot;weekEnd&quot;: 4,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Elissa Stamm&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;i&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 18,
                        &quot;promotionId&quot;: 6,
                        &quot;popularity&quot;: 72,
                        &quot;strength&quot;: 58,
                        &quot;skill&quot;: 65,
                        &quot;agility&quot;: 68,
                        &quot;stamina&quot;: 73,
                        &quot;attitude&quot;: 52,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Finn Rogahn&quot;,
                        &quot;gender&quot;: &quot;MALE&quot;,
                        &quot;finisherName&quot;: &quot;k&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 4,
                        &quot;promotionId&quot;: 8,
                        &quot;popularity&quot;: 54,
                        &quot;strength&quot;: 97,
                        &quot;skill&quot;: 71,
                        &quot;agility&quot;: 67,
                        &quot;stamina&quot;: 69,
                        &quot;attitude&quot;: 63,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    }
                ]
            },
            {
                &quot;id&quot;: 3,
                &quot;championshipId&quot;: 1,
                &quot;yearStart&quot;: 1999,
                &quot;monthStart&quot;: 5,
                &quot;weekStart&quot;: 4,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 14,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;i&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 18,
                        &quot;promotionId&quot;: 8,
                        &quot;popularity&quot;: 73,
                        &quot;strength&quot;: 95,
                        &quot;skill&quot;: 88,
                        &quot;agility&quot;: 81,
                        &quot;stamina&quot;: 60,
                        &quot;attitude&quot;: 65,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    },
                    {
                        &quot;id&quot;: 19,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                        &quot;gender&quot;: &quot;MALE&quot;,
                        &quot;finisherName&quot;: &quot;g&quot;,
                        &quot;allegiance&quot;: &quot;HEEL&quot;,
                        &quot;role&quot;: &quot;WRESTLER&quot;,
                        &quot;territoryId&quot;: 46,
                        &quot;promotionId&quot;: 7,
                        &quot;popularity&quot;: 95,
                        &quot;strength&quot;: 63,
                        &quot;skill&quot;: 94,
                        &quot;agility&quot;: 67,
                        &quot;stamina&quot;: 83,
                        &quot;attitude&quot;: 86,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    }
                ]
            },
            {
                &quot;id&quot;: 4,
                &quot;championshipId&quot;: 1,
                &quot;yearStart&quot;: 1972,
                &quot;monthStart&quot;: 11,
                &quot;weekStart&quot;: 2,
                &quot;yearEnd&quot;: null,
                &quot;monthEnd&quot;: null,
                &quot;weekEnd&quot;: null,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 20,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                        &quot;gender&quot;: &quot;N/A&quot;,
                        &quot;finisherName&quot;: &quot;y&quot;,
                        &quot;allegiance&quot;: &quot;HEEL&quot;,
                        &quot;role&quot;: &quot;MANAGER&quot;,
                        &quot;territoryId&quot;: 40,
                        &quot;promotionId&quot;: 9,
                        &quot;popularity&quot;: 92,
                        &quot;strength&quot;: 97,
                        &quot;skill&quot;: 70,
                        &quot;agility&quot;: 55,
                        &quot;stamina&quot;: 76,
                        &quot;attitude&quot;: 90,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    },
                    {
                        &quot;id&quot;: 18,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Hermina Schumm&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;z&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;BOOKER&quot;,
                        &quot;territoryId&quot;: 5,
                        &quot;promotionId&quot;: 4,
                        &quot;popularity&quot;: 66,
                        &quot;strength&quot;: 60,
                        &quot;skill&quot;: 76,
                        &quot;agility&quot;: 61,
                        &quot;stamina&quot;: 78,
                        &quot;attitude&quot;: 80,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null
                    }
                ]
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-championships--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-championships--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-championships--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-championships--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-championships--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-championships--id-" data-method="GET"
      data-path="api/v1/championships/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-championships--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-championships--id-"
                    onclick="tryItOut('GETapi-v1-championships--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-championships--id-"
                    onclick="cancelTryOut('GETapi-v1-championships--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-championships--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/championships/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-championships--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the championship. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-championships--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-championships--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/championships/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/championships/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-championships--id-">
</span>
<span id="execution-results-PUTapi-v1-championships--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-championships--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-championships--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-championships--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-championships--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-championships--id-" data-method="PUT"
      data-path="api/v1/championships/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-championships--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-championships--id-"
                    onclick="tryItOut('PUTapi-v1-championships--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-championships--id-"
                    onclick="cancelTryOut('PUTapi-v1-championships--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-championships--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/championships/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/championships/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-championships--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the championship. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-championships--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-championships--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/championships/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/championships/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-championships--id-">
</span>
<span id="execution-results-DELETEapi-v1-championships--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-championships--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-championships--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-championships--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-championships--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-championships--id-" data-method="DELETE"
      data-path="api/v1/championships/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-championships--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-championships--id-"
                    onclick="tryItOut('DELETEapi-v1-championships--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-championships--id-"
                    onclick="cancelTryOut('DELETEapi-v1-championships--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-championships--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/championships/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-championships--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-championships--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the championship. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-events">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-events">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/events" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-events">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 7,
            &quot;championshipId&quot;: 11,
            &quot;showId&quot;: 12,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 2,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 5,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 14,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Open Challenge&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Confrontation&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: 1,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 34,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 12,
            &quot;showId&quot;: 39,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Best of Three&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;name&quot;: &quot;Shoot Fight&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 6,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 15,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Last Laugh&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Street Fight&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 13,
            &quot;showId&quot;: 36,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 8,
            &quot;championshipId&quot;: 14,
            &quot;showId&quot;: 24,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Best of Three&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 21,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Submission&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 15,
            &quot;showId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 16,
            &quot;showId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Open Challenge&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;name&quot;: &quot;War&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 11,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 17,
            &quot;showId&quot;: 39,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 12,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: 18,
            &quot;showId&quot;: 13,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 13,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 19,
            &quot;showId&quot;: 29,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Ironman&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Last Laugh&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 14,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 2,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;name&quot;: &quot;War&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 15,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Best of Three&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Ironman&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;name&quot;: &quot;Training&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 16,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 14,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 17,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 2,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 26,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Confrontation&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Last Laugh&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;name&quot;: &quot;Hell in a Cell&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 18,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 20,
            &quot;showId&quot;: 12,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Last Man Standing&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Tag Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 19,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 21,
            &quot;showId&quot;: 23,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Hardcore&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 20,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 4,
            &quot;championshipId&quot;: 22,
            &quot;showId&quot;: 25,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Confrontation&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Best of Three&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;name&quot;: &quot;Ladder&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 21,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 22,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 6,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 25,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Last Man Standing&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 23,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: 23,
            &quot;showId&quot;: 21,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 24,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 24,
            &quot;showId&quot;: 22,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Open Challenge&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Last Laugh&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Street Fight&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 25,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 18,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 26,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 8,
            &quot;championshipId&quot;: 25,
            &quot;showId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Tag Elimination&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;name&quot;: &quot;Escape to Victory&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 27,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 4,
            &quot;championshipId&quot;: 26,
            &quot;showId&quot;: 18,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 28,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 2,
            &quot;championshipId&quot;: 27,
            &quot;showId&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Confrontation&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 29,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 13,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;name&quot;: &quot;Furniture Smash&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 30,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 28,
            &quot;showId&quot;: 22,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Ironman&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Last Man Standing&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;name&quot;: &quot;Hell in a Cell&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 31,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 15,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Street Fight&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;name&quot;: &quot;Sumo Contest&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 32,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: 29,
            &quot;showId&quot;: 35,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;name&quot;: &quot;Escape to Victory&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 33,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 5,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 28,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Last Man Standing&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 34,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 7,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 28,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 35,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 1,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 19,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Ironman&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Tag Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 36,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: 30,
            &quot;showId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 37,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 3,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Tag Elimination&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;name&quot;: &quot;Escape to Victory&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 38,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 4,
            &quot;championshipId&quot;: 31,
            &quot;showId&quot;: 30,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;UNFINISHED&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: []
        },
        {
            &quot;id&quot;: 39,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 5,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 9,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;name&quot;: &quot;Furniture Smash&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;name&quot;: &quot;Hell in a Cell&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;name&quot;: &quot;Training&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 40,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 4,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;name&quot;: &quot;Furniture Smash&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;name&quot;: &quot;Ladder&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 41,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: 4,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 37,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Best of Three&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Ironman&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Tag Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 42,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;MAIN&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: 32,
            &quot;showId&quot;: 8,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;PIN&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Hardcore&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;name&quot;: &quot;War&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 43,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 2,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 38,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 19,
                    &quot;name&quot;: &quot;Hell in a Cell&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 44,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 45,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;SEMI&quot;,
            &quot;matchTypeId&quot;: 3,
            &quot;championshipId&quot;: 33,
            &quot;showId&quot;: 20,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;name&quot;: &quot;Ladder&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 46,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 9,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 22,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;ELIMINATION&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;DISQUALIFICATION&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;name&quot;: &quot;Furniture Smash&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;name&quot;: &quot;Hell in a Cell&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 47,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;MID&quot;,
            &quot;matchTypeId&quot;: 5,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 22,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;PIN&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;name&quot;: &quot;Shoot Fight&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 48,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;SPECIAL&quot;
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Confrontation&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 49,
            &quot;type&quot;: &quot;MATCH&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: 5,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Open Challenge&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;name&quot;: &quot;Furniture Smash&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 50,
            &quot;type&quot;: &quot;PROMO&quot;,
            &quot;placement&quot;: &quot;UNDER&quot;,
            &quot;matchTypeId&quot;: null,
            &quot;championshipId&quot;: null,
            &quot;showId&quot;: 12,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 0,
                    &quot;finishType&quot;: &quot;TIMEOUT&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;COUNTOUT&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null,
                    &quot;isWinner&quot;: 1,
                    &quot;finishType&quot;: &quot;SUBMISSION&quot;
                }
            ],
            &quot;stipulations&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Last Man Standing&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;First Blood&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Elimination&quot;
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-events" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-events"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-events"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-events">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-events" data-method="GET"
      data-path="api/v1/events"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-events', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-events"
                    onclick="tryItOut('GETapi-v1-events');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-events"
                    onclick="cancelTryOut('GETapi-v1-events');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-events"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/events</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-events">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-events">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/events" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"PROMO\",
    \"placement\": \"MID\",
    \"matchTypeId\": 16,
    \"championshipId\": 16,
    \"showId\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "PROMO",
    "placement": "MID",
    "matchTypeId": 16,
    "championshipId": 16,
    "showId": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-events">
</span>
<span id="execution-results-POSTapi-v1-events" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-events"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-events"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-events">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-events" data-method="POST"
      data-path="api/v1/events"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-events', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-events"
                    onclick="tryItOut('POSTapi-v1-events');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-events"
                    onclick="cancelTryOut('POSTapi-v1-events');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-events"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/events</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-events"
               value="PROMO"
               data-component="body">
    <br>
<p>Example: <code>PROMO</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>PROMO</code></li> <li><code>MATCH</code></li> <li><code>SEGMENT</code></li> <li><code>BRAWL</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>placement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="placement"                data-endpoint="POSTapi-v1-events"
               value="MID"
               data-component="body">
    <br>
<p>Example: <code>MID</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>UNDER</code></li> <li><code>MID</code></li> <li><code>SEMI</code></li> <li><code>MAIN</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>matchTypeId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="matchTypeId"                data-endpoint="POSTapi-v1-events"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>championshipId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="championshipId"                data-endpoint="POSTapi-v1-events"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>showId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="showId"                data-endpoint="POSTapi-v1-events"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-events--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/events/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-events--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;type&quot;: &quot;MATCH&quot;,
        &quot;placement&quot;: &quot;MID&quot;,
        &quot;matchTypeId&quot;: 7,
        &quot;championshipId&quot;: 11,
        &quot;showId&quot;: 12,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;wrestlers&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Timmy Renner&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;v&quot;,
                &quot;allegiance&quot;: &quot;FACE&quot;,
                &quot;role&quot;: &quot;MANAGER&quot;,
                &quot;territoryId&quot;: 8,
                &quot;promotionId&quot;: 3,
                &quot;popularity&quot;: 92,
                &quot;strength&quot;: 84,
                &quot;skill&quot;: 83,
                &quot;agility&quot;: 60,
                &quot;stamina&quot;: 55,
                &quot;attitude&quot;: 66,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null,
                &quot;isWinner&quot;: 0,
                &quot;finishType&quot;: &quot;COUNTOUT&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;a&quot;,
                &quot;allegiance&quot;: &quot;TWEENER&quot;,
                &quot;role&quot;: &quot;WRESTLER&quot;,
                &quot;territoryId&quot;: 36,
                &quot;promotionId&quot;: 7,
                &quot;popularity&quot;: 86,
                &quot;strength&quot;: 63,
                &quot;skill&quot;: 64,
                &quot;agility&quot;: 51,
                &quot;stamina&quot;: 59,
                &quot;attitude&quot;: 85,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null,
                &quot;isWinner&quot;: 0,
                &quot;finishType&quot;: &quot;TIMEOUT&quot;
            }
        ],
        &quot;stipulations&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-events--id-" data-method="GET"
      data-path="api/v1/events/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-events--id-"
                    onclick="tryItOut('GETapi-v1-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-events--id-"
                    onclick="cancelTryOut('GETapi-v1-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-events--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-events--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/events/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-events--id-">
</span>
<span id="execution-results-PUTapi-v1-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-events--id-" data-method="PUT"
      data-path="api/v1/events/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-events--id-"
                    onclick="tryItOut('PUTapi-v1-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-events--id-"
                    onclick="cancelTryOut('PUTapi-v1-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/events/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-events--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-events--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/events/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-events--id-">
</span>
<span id="execution-results-DELETEapi-v1-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-events--id-" data-method="DELETE"
      data-path="api/v1/events/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-events--id-"
                    onclick="tryItOut('DELETEapi-v1-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-events--id-"
                    onclick="cancelTryOut('DELETEapi-v1-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-events--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-shows">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-shows">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/shows" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/shows"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-shows">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Prof. Greta Quitzon&quot;,
            &quot;year&quot;: 1989,
            &quot;month&quot;: 4,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 21,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Madelynn Beier I&quot;,
            &quot;year&quot;: 2020,
            &quot;month&quot;: 9,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 15,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Prof. Helmer Cartwright PhD&quot;,
            &quot;year&quot;: 2009,
            &quot;month&quot;: 4,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 10,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: null,
            &quot;year&quot;: 1985,
            &quot;month&quot;: 11,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 14,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: null,
            &quot;year&quot;: 1981,
            &quot;month&quot;: 10,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: null,
            &quot;year&quot;: 1980,
            &quot;month&quot;: 2,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 32,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: null,
            &quot;year&quot;: 2023,
            &quot;month&quot;: 12,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Miss Carlotta Effertz Jr.&quot;,
            &quot;year&quot;: 2024,
            &quot;month&quot;: 1,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Yasmine Gibson&quot;,
            &quot;year&quot;: 1986,
            &quot;month&quot;: 7,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 5,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Gregg Herzog&quot;,
            &quot;year&quot;: 1991,
            &quot;month&quot;: 8,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 22,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Mr. Mariano Konopelski Sr.&quot;,
            &quot;year&quot;: 2004,
            &quot;month&quot;: 11,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 19,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Zetta Simonis&quot;,
            &quot;year&quot;: 2020,
            &quot;month&quot;: 3,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: null,
            &quot;year&quot;: 1991,
            &quot;month&quot;: 6,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 21,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Gregory Larkin&quot;,
            &quot;year&quot;: 2013,
            &quot;month&quot;: 3,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 12,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Travon Murazik PhD&quot;,
            &quot;year&quot;: 1972,
            &quot;month&quot;: 11,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 18,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: null,
            &quot;year&quot;: 2026,
            &quot;month&quot;: 7,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 38,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: null,
            &quot;year&quot;: 2002,
            &quot;month&quot;: 3,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 38,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Lina Doyle&quot;,
            &quot;year&quot;: 1994,
            &quot;month&quot;: 4,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 42,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: null,
            &quot;year&quot;: 1998,
            &quot;month&quot;: 8,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 19,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: null,
            &quot;year&quot;: 2000,
            &quot;month&quot;: 3,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;Joan Heller&quot;,
            &quot;year&quot;: 1986,
            &quot;month&quot;: 4,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 23,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: null,
            &quot;year&quot;: 1986,
            &quot;month&quot;: 11,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 19,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: null,
            &quot;year&quot;: 2019,
            &quot;month&quot;: 1,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Prof. Tyrese Vandervort&quot;,
            &quot;year&quot;: 1979,
            &quot;month&quot;: 11,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 16,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: null,
            &quot;year&quot;: 2004,
            &quot;month&quot;: 9,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 33,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: null,
            &quot;year&quot;: 2011,
            &quot;month&quot;: 8,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: null,
            &quot;year&quot;: 2014,
            &quot;month&quot;: 10,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 18,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: null,
            &quot;year&quot;: 1970,
            &quot;month&quot;: 2,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 24,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Mr. Herbert Kohler V&quot;,
            &quot;year&quot;: 2006,
            &quot;month&quot;: 2,
            &quot;week&quot;: 4,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 29,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Clemmie Hermiston&quot;,
            &quot;year&quot;: 2013,
            &quot;month&quot;: 3,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Harry DuBuque&quot;,
            &quot;year&quot;: 2008,
            &quot;month&quot;: 1,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 46,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;Julianne Stroman Sr.&quot;,
            &quot;year&quot;: 2019,
            &quot;month&quot;: 10,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 6,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Dr. Kip Bergstrom Sr.&quot;,
            &quot;year&quot;: 1970,
            &quot;month&quot;: 10,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 16,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Benton Langosh&quot;,
            &quot;year&quot;: 2000,
            &quot;month&quot;: 5,
            &quot;week&quot;: 1,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 40,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Dr. Yvette Bechtelar&quot;,
            &quot;year&quot;: 1977,
            &quot;month&quot;: 1,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 7,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: null,
            &quot;year&quot;: 1990,
            &quot;month&quot;: 4,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 32,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;Collin Swift&quot;,
            &quot;year&quot;: 1977,
            &quot;month&quot;: 12,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;PPV&quot;,
            &quot;territoryId&quot;: 27,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;Ms. Brianne Kassulke II&quot;,
            &quot;year&quot;: 2013,
            &quot;month&quot;: 11,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 39,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: null,
            &quot;year&quot;: 2022,
            &quot;month&quot;: 2,
            &quot;week&quot;: 3,
            &quot;type&quot;: &quot;TV&quot;,
            &quot;territoryId&quot;: 29,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Cleora Pfeffer&quot;,
            &quot;year&quot;: 1985,
            &quot;month&quot;: 8,
            &quot;week&quot;: 2,
            &quot;type&quot;: &quot;SPECIAL&quot;,
            &quot;territoryId&quot;: 14,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-shows" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-shows"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-shows"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-shows" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-shows">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-shows" data-method="GET"
      data-path="api/v1/shows"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-shows', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-shows"
                    onclick="tryItOut('GETapi-v1-shows');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-shows"
                    onclick="cancelTryOut('GETapi-v1-shows');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-shows"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/shows</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-shows"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-shows"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-shows">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-shows">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/shows" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"year\": 16,
    \"month\": 4,
    \"week\": 3,
    \"type\": \"SPECIAL\",
    \"territoryId\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/shows"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "year": 16,
    "month": 4,
    "week": 3,
    "type": "SPECIAL",
    "territoryId": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-shows">
</span>
<span id="execution-results-POSTapi-v1-shows" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-shows"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-shows"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-shows" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-shows">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-shows" data-method="POST"
      data-path="api/v1/shows"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-shows', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-shows"
                    onclick="tryItOut('POSTapi-v1-shows');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-shows"
                    onclick="cancelTryOut('POSTapi-v1-shows');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-shows"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/shows</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-shows"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-shows"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-shows"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-v1-shows"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="POSTapi-v1-shows"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>week</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="week"                data-endpoint="POSTapi-v1-shows"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-shows"
               value="SPECIAL"
               data-component="body">
    <br>
<p>Example: <code>SPECIAL</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>TV</code></li> <li><code>PPV</code></li> <li><code>SPECIAL</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>territoryId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="territoryId"                data-endpoint="POSTapi-v1-shows"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-shows--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-shows--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/shows/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/shows/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-shows--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Prof. Greta Quitzon&quot;,
        &quot;year&quot;: 1989,
        &quot;month&quot;: 4,
        &quot;week&quot;: 1,
        &quot;type&quot;: &quot;PPV&quot;,
        &quot;territoryId&quot;: 21,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;events&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;type&quot;: &quot;PROMO&quot;,
                &quot;placement&quot;: &quot;UNDER&quot;,
                &quot;matchTypeId&quot;: null,
                &quot;championshipId&quot;: 16,
                &quot;showId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 6,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Broderick Nolan&quot;,
                        &quot;gender&quot;: &quot;MALE&quot;,
                        &quot;finisherName&quot;: &quot;t&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;MANAGER&quot;,
                        &quot;territoryId&quot;: 19,
                        &quot;promotionId&quot;: 1,
                        &quot;popularity&quot;: 95,
                        &quot;strength&quot;: 89,
                        &quot;skill&quot;: 73,
                        &quot;agility&quot;: 59,
                        &quot;stamina&quot;: 54,
                        &quot;attitude&quot;: 69,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 0,
                        &quot;finishType&quot;: &quot;TIMEOUT&quot;
                    },
                    {
                        &quot;id&quot;: 13,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                        &quot;gender&quot;: &quot;MALE&quot;,
                        &quot;finisherName&quot;: &quot;p&quot;,
                        &quot;allegiance&quot;: &quot;HEEL&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 33,
                        &quot;promotionId&quot;: 3,
                        &quot;popularity&quot;: 63,
                        &quot;strength&quot;: 71,
                        &quot;skill&quot;: 56,
                        &quot;agility&quot;: 51,
                        &quot;stamina&quot;: 70,
                        &quot;attitude&quot;: 57,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 0,
                        &quot;finishType&quot;: &quot;TIMEOUT&quot;
                    },
                    {
                        &quot;id&quot;: 15,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Shanie McClure&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;f&quot;,
                        &quot;allegiance&quot;: &quot;TWEENER&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 41,
                        &quot;promotionId&quot;: 4,
                        &quot;popularity&quot;: 56,
                        &quot;strength&quot;: 54,
                        &quot;skill&quot;: 70,
                        &quot;agility&quot;: 57,
                        &quot;stamina&quot;: 50,
                        &quot;attitude&quot;: 71,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 0,
                        &quot;finishType&quot;: &quot;UNFINISHED&quot;
                    },
                    {
                        &quot;id&quot;: 17,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;j&quot;,
                        &quot;allegiance&quot;: &quot;HEEL&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 26,
                        &quot;promotionId&quot;: 4,
                        &quot;popularity&quot;: 80,
                        &quot;strength&quot;: 68,
                        &quot;skill&quot;: 50,
                        &quot;agility&quot;: 88,
                        &quot;stamina&quot;: 64,
                        &quot;attitude&quot;: 60,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 0,
                        &quot;finishType&quot;: &quot;SUBMISSION&quot;
                    },
                    {
                        &quot;id&quot;: 19,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                        &quot;gender&quot;: &quot;MALE&quot;,
                        &quot;finisherName&quot;: &quot;g&quot;,
                        &quot;allegiance&quot;: &quot;HEEL&quot;,
                        &quot;role&quot;: &quot;WRESTLER&quot;,
                        &quot;territoryId&quot;: 46,
                        &quot;promotionId&quot;: 7,
                        &quot;popularity&quot;: 95,
                        &quot;strength&quot;: 63,
                        &quot;skill&quot;: 94,
                        &quot;agility&quot;: 67,
                        &quot;stamina&quot;: 83,
                        &quot;attitude&quot;: 86,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 0,
                        &quot;finishType&quot;: &quot;TIMEOUT&quot;
                    }
                ],
                &quot;stipulations&quot;: [
                    {
                        &quot;id&quot;: 14,
                        &quot;name&quot;: &quot;War&quot;
                    },
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;Open Challenge&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 21,
                &quot;type&quot;: &quot;PROMO&quot;,
                &quot;placement&quot;: &quot;UNDER&quot;,
                &quot;matchTypeId&quot;: null,
                &quot;championshipId&quot;: null,
                &quot;showId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;wrestlers&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                        &quot;name&quot;: &quot;Raina Schaden&quot;,
                        &quot;gender&quot;: &quot;FEMALE&quot;,
                        &quot;finisherName&quot;: &quot;u&quot;,
                        &quot;allegiance&quot;: &quot;FACE&quot;,
                        &quot;role&quot;: &quot;REFEREE&quot;,
                        &quot;territoryId&quot;: 22,
                        &quot;promotionId&quot;: 4,
                        &quot;popularity&quot;: 75,
                        &quot;strength&quot;: 59,
                        &quot;skill&quot;: 81,
                        &quot;agility&quot;: 70,
                        &quot;stamina&quot;: 82,
                        &quot;attitude&quot;: 92,
                        &quot;managerId&quot;: null,
                        &quot;partnerId&quot;: null,
                        &quot;storyFriendId&quot;: null,
                        &quot;storyEnemyId&quot;: null,
                        &quot;realFriendId&quot;: null,
                        &quot;realEnemyId&quot;: null,
                        &quot;isWinner&quot;: 1,
                        &quot;finishType&quot;: &quot;PIN&quot;
                    }
                ],
                &quot;stipulations&quot;: []
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-shows--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-shows--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-shows--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-shows--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-shows--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-shows--id-" data-method="GET"
      data-path="api/v1/shows/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-shows--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-shows--id-"
                    onclick="tryItOut('GETapi-v1-shows--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-shows--id-"
                    onclick="cancelTryOut('GETapi-v1-shows--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-shows--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/shows/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-shows--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the show. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-shows--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-shows--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/shows/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/shows/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-shows--id-">
</span>
<span id="execution-results-PUTapi-v1-shows--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-shows--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-shows--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-shows--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-shows--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-shows--id-" data-method="PUT"
      data-path="api/v1/shows/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-shows--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-shows--id-"
                    onclick="tryItOut('PUTapi-v1-shows--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-shows--id-"
                    onclick="cancelTryOut('PUTapi-v1-shows--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-shows--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/shows/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/shows/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-shows--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the show. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-shows--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-shows--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/shows/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/shows/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-shows--id-">
</span>
<span id="execution-results-DELETEapi-v1-shows--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-shows--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-shows--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-shows--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-shows--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-shows--id-" data-method="DELETE"
      data-path="api/v1/shows/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-shows--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-shows--id-"
                    onclick="tryItOut('DELETEapi-v1-shows--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-shows--id-"
                    onclick="cancelTryOut('DELETEapi-v1-shows--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-shows--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/shows/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-shows--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-shows--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the show. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-teams">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/teams" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teams">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Prof. Georgianna Paucek MD&quot;,
            &quot;yearStart&quot;: 2020,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 2012,
            &quot;monthEnd&quot;: 7,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Anna Nikolaus&quot;,
            &quot;yearStart&quot;: 2019,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Dr. Cortney Reichert&quot;,
            &quot;yearStart&quot;: 2022,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Prof. Trent Olson V&quot;,
            &quot;yearStart&quot;: 2004,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Mr. Gerson Wilderman&quot;,
            &quot;yearStart&quot;: 1994,
            &quot;monthStart&quot;: 10,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Kellie Cassin Jr.&quot;,
            &quot;yearStart&quot;: 1979,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Prof. Merritt Smith&quot;,
            &quot;yearStart&quot;: 2001,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1992,
            &quot;monthEnd&quot;: 9,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Miss Diana Jacobson I&quot;,
            &quot;yearStart&quot;: 1982,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1984,
            &quot;monthEnd&quot;: 11,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Mariano Collins PhD&quot;,
            &quot;yearStart&quot;: 2002,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Kolby Johnston&quot;,
            &quot;yearStart&quot;: 1977,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1996,
            &quot;monthEnd&quot;: 7,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teams" data-method="GET"
      data-path="api/v1/teams"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teams"
                    onclick="tryItOut('GETapi-v1-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teams"
                    onclick="cancelTryOut('GETapi-v1-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-teams">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/teams" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"yearStart\": 16,
    \"monthStart\": 4,
    \"weekStart\": 3,
    \"yearEnd\": 16,
    \"monthEnd\": 4,
    \"weekEnd\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "yearStart": 16,
    "monthStart": 4,
    "weekStart": 3,
    "yearEnd": 16,
    "monthEnd": 4,
    "weekEnd": 3
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teams">
</span>
<span id="execution-results-POSTapi-v1-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teams" data-method="POST"
      data-path="api/v1/teams"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teams"
                    onclick="tryItOut('POSTapi-v1-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teams"
                    onclick="cancelTryOut('POSTapi-v1-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-teams"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearStart"                data-endpoint="POSTapi-v1-teams"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthStart"                data-endpoint="POSTapi-v1-teams"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekStart"                data-endpoint="POSTapi-v1-teams"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearEnd"                data-endpoint="POSTapi-v1-teams"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthEnd"                data-endpoint="POSTapi-v1-teams"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekEnd"                data-endpoint="POSTapi-v1-teams"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-teams--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teams--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Prof. Georgianna Paucek MD&quot;,
        &quot;yearStart&quot;: 2020,
        &quot;monthStart&quot;: 5,
        &quot;weekStart&quot;: 3,
        &quot;yearEnd&quot;: 2012,
        &quot;monthEnd&quot;: 7,
        &quot;weekEnd&quot;: 1,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
        &quot;wrestlers&quot;: [
            {
                &quot;id&quot;: 8,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;a&quot;,
                &quot;allegiance&quot;: &quot;TWEENER&quot;,
                &quot;role&quot;: &quot;WRESTLER&quot;,
                &quot;territoryId&quot;: 36,
                &quot;promotionId&quot;: 7,
                &quot;popularity&quot;: 86,
                &quot;strength&quot;: 63,
                &quot;skill&quot;: 64,
                &quot;agility&quot;: 51,
                &quot;stamina&quot;: 59,
                &quot;attitude&quot;: 85,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Krystal Carroll&quot;,
                &quot;gender&quot;: &quot;FEMALE&quot;,
                &quot;finisherName&quot;: &quot;s&quot;,
                &quot;allegiance&quot;: &quot;HEEL&quot;,
                &quot;role&quot;: &quot;BOOKER&quot;,
                &quot;territoryId&quot;: 28,
                &quot;promotionId&quot;: 7,
                &quot;popularity&quot;: 93,
                &quot;strength&quot;: 52,
                &quot;skill&quot;: 59,
                &quot;agility&quot;: 95,
                &quot;stamina&quot;: 78,
                &quot;attitude&quot;: 56,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            },
            {
                &quot;id&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Timmy Renner&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;v&quot;,
                &quot;allegiance&quot;: &quot;FACE&quot;,
                &quot;role&quot;: &quot;MANAGER&quot;,
                &quot;territoryId&quot;: 8,
                &quot;promotionId&quot;: 3,
                &quot;popularity&quot;: 92,
                &quot;strength&quot;: 84,
                &quot;skill&quot;: 83,
                &quot;agility&quot;: 60,
                &quot;stamina&quot;: 55,
                &quot;attitude&quot;: 66,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            },
            {
                &quot;id&quot;: 13,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;p&quot;,
                &quot;allegiance&quot;: &quot;HEEL&quot;,
                &quot;role&quot;: &quot;REFEREE&quot;,
                &quot;territoryId&quot;: 33,
                &quot;promotionId&quot;: 3,
                &quot;popularity&quot;: 63,
                &quot;strength&quot;: 71,
                &quot;skill&quot;: 56,
                &quot;agility&quot;: 51,
                &quot;stamina&quot;: 70,
                &quot;attitude&quot;: 57,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teams--id-" data-method="GET"
      data-path="api/v1/teams/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teams--id-"
                    onclick="tryItOut('GETapi-v1-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teams--id-"
                    onclick="cancelTryOut('GETapi-v1-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-teams--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teams--id-">
</span>
<span id="execution-results-PUTapi-v1-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teams--id-" data-method="PUT"
      data-path="api/v1/teams/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teams--id-"
                    onclick="tryItOut('PUTapi-v1-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teams--id-"
                    onclick="cancelTryOut('PUTapi-v1-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-teams--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teams--id-">
</span>
<span id="execution-results-DELETEapi-v1-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teams--id-" data-method="DELETE"
      data-path="api/v1/teams/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teams--id-"
                    onclick="tryItOut('DELETEapi-v1-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teams--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-title_reigns">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-title_reigns">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/title_reigns" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-title_reigns">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;championshipId&quot;: 1,
            &quot;yearStart&quot;: 1996,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1998,
            &quot;monthEnd&quot;: 3,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T08:05:57.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;championshipId&quot;: 1,
            &quot;yearStart&quot;: 1978,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2007,
            &quot;monthEnd&quot;: 3,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;championshipId&quot;: 1,
            &quot;yearStart&quot;: 1999,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;championshipId&quot;: 1,
            &quot;yearStart&quot;: 1972,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;championshipId&quot;: 2,
            &quot;yearStart&quot;: 1974,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 2010,
            &quot;monthEnd&quot;: 12,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;championshipId&quot;: 2,
            &quot;yearStart&quot;: 2010,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2008,
            &quot;monthEnd&quot;: 5,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;championshipId&quot;: 2,
            &quot;yearStart&quot;: 1979,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2005,
            &quot;monthEnd&quot;: 12,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;championshipId&quot;: 2,
            &quot;yearStart&quot;: 1971,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2026,
            &quot;monthEnd&quot;: 7,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;championshipId&quot;: 3,
            &quot;yearStart&quot;: 2016,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2016,
            &quot;monthEnd&quot;: 10,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 10,
            &quot;championshipId&quot;: 3,
            &quot;yearStart&quot;: 1993,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1989,
            &quot;monthEnd&quot;: 2,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 11,
            &quot;championshipId&quot;: 3,
            &quot;yearStart&quot;: 2000,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1981,
            &quot;monthEnd&quot;: 6,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 12,
            &quot;championshipId&quot;: 3,
            &quot;yearStart&quot;: 1999,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 13,
            &quot;championshipId&quot;: 4,
            &quot;yearStart&quot;: 1981,
            &quot;monthStart&quot;: 8,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1983,
            &quot;monthEnd&quot;: 6,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 14,
            &quot;championshipId&quot;: 4,
            &quot;yearStart&quot;: 1973,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 15,
            &quot;championshipId&quot;: 4,
            &quot;yearStart&quot;: 2001,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1990,
            &quot;monthEnd&quot;: 3,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 16,
            &quot;championshipId&quot;: 4,
            &quot;yearStart&quot;: 2021,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 17,
            &quot;championshipId&quot;: 5,
            &quot;yearStart&quot;: 2004,
            &quot;monthStart&quot;: 10,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2018,
            &quot;monthEnd&quot;: 7,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 18,
            &quot;championshipId&quot;: 5,
            &quot;yearStart&quot;: 1983,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1995,
            &quot;monthEnd&quot;: 8,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 19,
            &quot;championshipId&quot;: 5,
            &quot;yearStart&quot;: 1991,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 20,
            &quot;championshipId&quot;: 5,
            &quot;yearStart&quot;: 1972,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1995,
            &quot;monthEnd&quot;: 4,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 21,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 1987,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 2003,
            &quot;monthEnd&quot;: 8,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 22,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 1970,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1975,
            &quot;monthEnd&quot;: 5,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 23,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2006,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 24,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2017,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1976,
            &quot;monthEnd&quot;: 7,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 25,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2011,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 26,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2001,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 2000,
            &quot;monthEnd&quot;: 10,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 27,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2014,
            &quot;monthStart&quot;: 10,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 28,
            &quot;championshipId&quot;: 6,
            &quot;yearStart&quot;: 2020,
            &quot;monthStart&quot;: 10,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2007,
            &quot;monthEnd&quot;: 5,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 29,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 1979,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 30,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 1976,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 31,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 2021,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 32,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 2002,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 33,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 2009,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2021,
            &quot;monthEnd&quot;: 1,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 34,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 1997,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1993,
            &quot;monthEnd&quot;: 2,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 35,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 1984,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1976,
            &quot;monthEnd&quot;: 12,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 36,
            &quot;championshipId&quot;: 7,
            &quot;yearStart&quot;: 2003,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2007,
            &quot;monthEnd&quot;: 10,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 37,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1972,
            &quot;monthStart&quot;: 8,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1977,
            &quot;monthEnd&quot;: 9,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 38,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 2019,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1995,
            &quot;monthEnd&quot;: 8,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 39,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1995,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1990,
            &quot;monthEnd&quot;: 8,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 40,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1984,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1991,
            &quot;monthEnd&quot;: 10,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 41,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1971,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 42,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1987,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1999,
            &quot;monthEnd&quot;: 1,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 43,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 2017,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1986,
            &quot;monthEnd&quot;: 6,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 44,
            &quot;championshipId&quot;: 8,
            &quot;yearStart&quot;: 1993,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 45,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 1974,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 1979,
            &quot;monthEnd&quot;: 6,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 46,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 2005,
            &quot;monthStart&quot;: 9,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 2025,
            &quot;monthEnd&quot;: 1,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 47,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 1998,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 2009,
            &quot;monthEnd&quot;: 10,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 48,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 2005,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 49,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 1989,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1993,
            &quot;monthEnd&quot;: 2,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 50,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 2018,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 51,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 2014,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1989,
            &quot;monthEnd&quot;: 5,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 52,
            &quot;championshipId&quot;: 9,
            &quot;yearStart&quot;: 1992,
            &quot;monthStart&quot;: 7,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 53,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 2023,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 54,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 1976,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 55,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 1980,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1973,
            &quot;monthEnd&quot;: 11,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 56,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 2017,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 57,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 1978,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1988,
            &quot;monthEnd&quot;: 2,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 58,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 2024,
            &quot;monthStart&quot;: 11,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 1991,
            &quot;monthEnd&quot;: 12,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 59,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 1971,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 60,
            &quot;championshipId&quot;: 10,
            &quot;yearStart&quot;: 2015,
            &quot;monthStart&quot;: 5,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 1975,
            &quot;monthEnd&quot;: 12,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 61,
            &quot;championshipId&quot;: 34,
            &quot;yearStart&quot;: 1993,
            &quot;monthStart&quot;: 6,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 62,
            &quot;championshipId&quot;: 35,
            &quot;yearStart&quot;: 1987,
            &quot;monthStart&quot;: 8,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1986,
            &quot;monthEnd&quot;: 4,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 63,
            &quot;championshipId&quot;: 36,
            &quot;yearStart&quot;: 2023,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2003,
            &quot;monthEnd&quot;: 5,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 64,
            &quot;championshipId&quot;: 37,
            &quot;yearStart&quot;: 2019,
            &quot;monthStart&quot;: 1,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 65,
            &quot;championshipId&quot;: 38,
            &quot;yearStart&quot;: 2016,
            &quot;monthStart&quot;: 2,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1977,
            &quot;monthEnd&quot;: 1,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 66,
            &quot;championshipId&quot;: 39,
            &quot;yearStart&quot;: 2007,
            &quot;monthStart&quot;: 10,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: null,
            &quot;monthEnd&quot;: null,
            &quot;weekEnd&quot;: null,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 67,
            &quot;championshipId&quot;: 40,
            &quot;yearStart&quot;: 2001,
            &quot;monthStart&quot;: 3,
            &quot;weekStart&quot;: 4,
            &quot;yearEnd&quot;: 2007,
            &quot;monthEnd&quot;: 9,
            &quot;weekEnd&quot;: 3,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 68,
            &quot;championshipId&quot;: 41,
            &quot;yearStart&quot;: 1999,
            &quot;monthStart&quot;: 4,
            &quot;weekStart&quot;: 2,
            &quot;yearEnd&quot;: 2007,
            &quot;monthEnd&quot;: 4,
            &quot;weekEnd&quot;: 1,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 69,
            &quot;championshipId&quot;: 42,
            &quot;yearStart&quot;: 1979,
            &quot;monthStart&quot;: 8,
            &quot;weekStart&quot;: 1,
            &quot;yearEnd&quot;: 2005,
            &quot;monthEnd&quot;: 1,
            &quot;weekEnd&quot;: 4,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 70,
            &quot;championshipId&quot;: 43,
            &quot;yearStart&quot;: 2002,
            &quot;monthStart&quot;: 12,
            &quot;weekStart&quot;: 3,
            &quot;yearEnd&quot;: 1998,
            &quot;monthEnd&quot;: 6,
            &quot;weekEnd&quot;: 2,
            &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-title_reigns" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-title_reigns"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-title_reigns"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-title_reigns" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-title_reigns">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-title_reigns" data-method="GET"
      data-path="api/v1/title_reigns"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-title_reigns', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-title_reigns"
                    onclick="tryItOut('GETapi-v1-title_reigns');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-title_reigns"
                    onclick="cancelTryOut('GETapi-v1-title_reigns');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-title_reigns"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/title_reigns</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-title_reigns"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-title_reigns"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-title_reigns">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-title_reigns">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/title_reigns" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"championshipId\": 16,
    \"yearStart\": 16,
    \"monthStart\": 4,
    \"weekStart\": 3,
    \"yearEnd\": 16,
    \"monthEnd\": 4,
    \"weekEnd\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "championshipId": 16,
    "yearStart": 16,
    "monthStart": 4,
    "weekStart": 3,
    "yearEnd": 16,
    "monthEnd": 4,
    "weekEnd": 3
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-title_reigns">
</span>
<span id="execution-results-POSTapi-v1-title_reigns" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-title_reigns"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-title_reigns"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-title_reigns" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-title_reigns">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-title_reigns" data-method="POST"
      data-path="api/v1/title_reigns"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-title_reigns', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-title_reigns"
                    onclick="tryItOut('POSTapi-v1-title_reigns');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-title_reigns"
                    onclick="cancelTryOut('POSTapi-v1-title_reigns');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-title_reigns"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/title_reigns</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-title_reigns"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-title_reigns"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>championshipId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="championshipId"                data-endpoint="POSTapi-v1-title_reigns"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearStart"                data-endpoint="POSTapi-v1-title_reigns"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthStart"                data-endpoint="POSTapi-v1-title_reigns"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekStart</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekStart"                data-endpoint="POSTapi-v1-title_reigns"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearEnd"                data-endpoint="POSTapi-v1-title_reigns"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthEnd"                data-endpoint="POSTapi-v1-title_reigns"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekEnd"                data-endpoint="POSTapi-v1-title_reigns"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-title_reigns--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-title_reigns--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/title_reigns/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-title_reigns--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;championshipId&quot;: 1,
        &quot;yearStart&quot;: 1996,
        &quot;monthStart&quot;: 6,
        &quot;weekStart&quot;: 4,
        &quot;yearEnd&quot;: 1998,
        &quot;monthEnd&quot;: 3,
        &quot;weekEnd&quot;: 4,
        &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
        &quot;updatedAt&quot;: &quot;2026-06-01T08:05:57.000000Z&quot;,
        &quot;wrestlers&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Elissa Stamm&quot;,
                &quot;gender&quot;: &quot;FEMALE&quot;,
                &quot;finisherName&quot;: &quot;i&quot;,
                &quot;allegiance&quot;: &quot;TWEENER&quot;,
                &quot;role&quot;: &quot;REFEREE&quot;,
                &quot;territoryId&quot;: 18,
                &quot;promotionId&quot;: 6,
                &quot;popularity&quot;: 72,
                &quot;strength&quot;: 58,
                &quot;skill&quot;: 65,
                &quot;agility&quot;: 68,
                &quot;stamina&quot;: 73,
                &quot;attitude&quot;: 52,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Amani Ruecker&quot;,
                &quot;gender&quot;: &quot;N/A&quot;,
                &quot;finisherName&quot;: &quot;o&quot;,
                &quot;allegiance&quot;: &quot;FACE&quot;,
                &quot;role&quot;: &quot;REFEREE&quot;,
                &quot;territoryId&quot;: 27,
                &quot;promotionId&quot;: 1,
                &quot;popularity&quot;: 56,
                &quot;strength&quot;: 57,
                &quot;skill&quot;: 93,
                &quot;agility&quot;: 60,
                &quot;stamina&quot;: 68,
                &quot;attitude&quot;: 62,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-title_reigns--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-title_reigns--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-title_reigns--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-title_reigns--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-title_reigns--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-title_reigns--id-" data-method="GET"
      data-path="api/v1/title_reigns/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-title_reigns--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-title_reigns--id-"
                    onclick="tryItOut('GETapi-v1-title_reigns--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-title_reigns--id-"
                    onclick="cancelTryOut('GETapi-v1-title_reigns--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-title_reigns--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/title_reigns/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-title_reigns--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the title reign. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-title_reigns--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-title_reigns--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/title_reigns/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-title_reigns--id-">
</span>
<span id="execution-results-PUTapi-v1-title_reigns--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-title_reigns--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-title_reigns--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-title_reigns--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-title_reigns--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-title_reigns--id-" data-method="PUT"
      data-path="api/v1/title_reigns/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-title_reigns--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-title_reigns--id-"
                    onclick="tryItOut('PUTapi-v1-title_reigns--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-title_reigns--id-"
                    onclick="cancelTryOut('PUTapi-v1-title_reigns--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-title_reigns--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/title_reigns/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/title_reigns/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-title_reigns--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the title reign. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-title_reigns--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-title_reigns--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/title_reigns/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-title_reigns--id-">
</span>
<span id="execution-results-DELETEapi-v1-title_reigns--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-title_reigns--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-title_reigns--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-title_reigns--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-title_reigns--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-title_reigns--id-" data-method="DELETE"
      data-path="api/v1/title_reigns/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-title_reigns--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-title_reigns--id-"
                    onclick="tryItOut('DELETEapi-v1-title_reigns--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-title_reigns--id-"
                    onclick="cancelTryOut('DELETEapi-v1-title_reigns--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-title_reigns--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/title_reigns/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-title_reigns--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-title_reigns--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the title reign. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-match_types">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-match_types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/match_types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/match_types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-match_types">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Singles&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Tag Team&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Team&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Triple Threat&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Fatal Four-way&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Handicap&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Gauntlet&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Battle Royale&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Countdown Elimination&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-match_types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-match_types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-match_types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-match_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-match_types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-match_types" data-method="GET"
      data-path="api/v1/match_types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-match_types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-match_types"
                    onclick="tryItOut('GETapi-v1-match_types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-match_types"
                    onclick="cancelTryOut('GETapi-v1-match_types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-match_types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/match_types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-match_types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-match_types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-match_types--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-match_types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/match_types/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/match_types/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-match_types--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Singles&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-match_types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-match_types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-match_types--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-match_types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-match_types--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-match_types--id-" data-method="GET"
      data-path="api/v1/match_types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-match_types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-match_types--id-"
                    onclick="tryItOut('GETapi-v1-match_types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-match_types--id-"
                    onclick="cancelTryOut('GETapi-v1-match_types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-match_types--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/match_types/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-match_types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-match_types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-match_types--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the match type. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-promotions">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-promotions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/promotions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/promotions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-promotions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Wrestling School&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Maple Leaf Grappling&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Super Lucha Libre&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Wrestling Revolution&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Rising Sun Puroresu&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Weekend Warriors&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Strong Style Wrestling&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;All American Wrestling&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Federation Online&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-promotions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-promotions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-promotions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-promotions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-promotions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-promotions" data-method="GET"
      data-path="api/v1/promotions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-promotions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-promotions"
                    onclick="tryItOut('GETapi-v1-promotions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-promotions"
                    onclick="cancelTryOut('GETapi-v1-promotions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-promotions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/promotions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-promotions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-promotions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-promotions--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-promotions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/promotions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/promotions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-promotions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Wrestling School&quot;,
        &quot;wrestlers&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Amani Ruecker&quot;,
                &quot;gender&quot;: &quot;N/A&quot;,
                &quot;finisherName&quot;: &quot;o&quot;,
                &quot;allegiance&quot;: &quot;FACE&quot;,
                &quot;role&quot;: &quot;REFEREE&quot;,
                &quot;territoryId&quot;: 27,
                &quot;promotionId&quot;: 1,
                &quot;popularity&quot;: 56,
                &quot;strength&quot;: 57,
                &quot;skill&quot;: 93,
                &quot;agility&quot;: 60,
                &quot;stamina&quot;: 68,
                &quot;attitude&quot;: 62,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                &quot;name&quot;: &quot;Broderick Nolan&quot;,
                &quot;gender&quot;: &quot;MALE&quot;,
                &quot;finisherName&quot;: &quot;t&quot;,
                &quot;allegiance&quot;: &quot;TWEENER&quot;,
                &quot;role&quot;: &quot;MANAGER&quot;,
                &quot;territoryId&quot;: 19,
                &quot;promotionId&quot;: 1,
                &quot;popularity&quot;: 95,
                &quot;strength&quot;: 89,
                &quot;skill&quot;: 73,
                &quot;agility&quot;: 59,
                &quot;stamina&quot;: 54,
                &quot;attitude&quot;: 69,
                &quot;managerId&quot;: null,
                &quot;partnerId&quot;: null,
                &quot;storyFriendId&quot;: null,
                &quot;storyEnemyId&quot;: null,
                &quot;realFriendId&quot;: null,
                &quot;realEnemyId&quot;: null
            }
        ],
        &quot;championships&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prof. Dayna Zboncak V&quot;,
                &quot;division&quot;: &quot;WOMENS&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ransom Fisher&quot;,
                &quot;division&quot;: &quot;TAG&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Lela Turner&quot;,
                &quot;division&quot;: &quot;WORLD&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;name&quot;: &quot;Araceli Dietrich&quot;,
                &quot;division&quot;: &quot;TAG&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 23,
                &quot;name&quot;: &quot;Ines Cole&quot;,
                &quot;division&quot;: &quot;WORLD&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            },
            {
                &quot;id&quot;: 28,
                &quot;name&quot;: &quot;Jadyn Reynolds PhD&quot;,
                &quot;division&quot;: &quot;WORLD&quot;,
                &quot;promotionId&quot;: 1,
                &quot;createdAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2026-06-01T07:18:49.000000Z&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-promotions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-promotions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-promotions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-promotions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-promotions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-promotions--id-" data-method="GET"
      data-path="api/v1/promotions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-promotions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-promotions--id-"
                    onclick="tryItOut('GETapi-v1-promotions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-promotions--id-"
                    onclick="cancelTryOut('GETapi-v1-promotions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-promotions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/promotions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-promotions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-promotions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-promotions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the promotion. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-stipulations">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-stipulations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/stipulations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/stipulations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-stipulations">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Hardcore&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Open Challenge&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Confrontation&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Best of Three&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Ironman&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Last Laugh&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Submission&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Last Man Standing&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Street Fight&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;First Blood&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Sumo Contest&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Shoot Fight&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Tag Elimination&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;War&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Elimination&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Escape to Victory&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;Furniture Smash&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Ladder&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Hell in a Cell&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;Training&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-stipulations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-stipulations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-stipulations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-stipulations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-stipulations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-stipulations" data-method="GET"
      data-path="api/v1/stipulations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-stipulations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-stipulations"
                    onclick="tryItOut('GETapi-v1-stipulations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-stipulations"
                    onclick="cancelTryOut('GETapi-v1-stipulations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-stipulations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/stipulations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-stipulations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-stipulations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-stipulations--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-stipulations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/stipulations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/stipulations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-stipulations--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Hardcore&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-stipulations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-stipulations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-stipulations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-stipulations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-stipulations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-stipulations--id-" data-method="GET"
      data-path="api/v1/stipulations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-stipulations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-stipulations--id-"
                    onclick="tryItOut('GETapi-v1-stipulations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-stipulations--id-"
                    onclick="cancelTryOut('GETapi-v1-stipulations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-stipulations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/stipulations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-stipulations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-stipulations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-stipulations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the stipulation. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-territories">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-territories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/territories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/territories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-territories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Alaska&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Canada&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Nunavut&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Greenland&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Finn Rogahn&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;k&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 4,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 54,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 71,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 69,
                    &quot;attitude&quot;: 63,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Iceland&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Hermina Schumm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;z&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 5,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 66,
                    &quot;strength&quot;: 60,
                    &quot;skill&quot;: 76,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 80,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Quebec&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;North East USA&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;South East USA&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Timmy Renner&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;v&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 8,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 84,
                    &quot;skill&quot;: 83,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 55,
                    &quot;attitude&quot;: 66,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;South West USA&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;North West USA&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Caribbean&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Mexico&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Colombia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Brazil&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Argentina&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;United Kingdom&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfonzo Mitchell I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 16,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 84,
                    &quot;strength&quot;: 73,
                    &quot;skill&quot;: 78,
                    &quot;agility&quot;: 93,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;West Europe&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;East Europe&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Elissa Stamm&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 72,
                    &quot;strength&quot;: 58,
                    &quot;skill&quot;: 65,
                    &quot;agility&quot;: 68,
                    &quot;stamina&quot;: 73,
                    &quot;attitude&quot;: 52,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 14,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mrs. Lupe Crist DVM&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;i&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 18,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 73,
                    &quot;strength&quot;: 95,
                    &quot;skill&quot;: 88,
                    &quot;agility&quot;: 81,
                    &quot;stamina&quot;: 60,
                    &quot;attitude&quot;: 65,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Scandinavia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Broderick Nolan&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;t&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 19,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 89,
                    &quot;skill&quot;: 73,
                    &quot;agility&quot;: 59,
                    &quot;stamina&quot;: 54,
                    &quot;attitude&quot;: 69,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;Svalbard&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;West Russia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Russia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Raina Schaden&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;u&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 22,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 75,
                    &quot;strength&quot;: 59,
                    &quot;skill&quot;: 81,
                    &quot;agility&quot;: 70,
                    &quot;stamina&quot;: 82,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;Siberia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Mr. Marcus Labadie I&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;d&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 23,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 79,
                    &quot;strength&quot;: 83,
                    &quot;skill&quot;: 57,
                    &quot;agility&quot;: 69,
                    &quot;stamina&quot;: 67,
                    &quot;attitude&quot;: 68,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Japan&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;Korea&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Johann Nitzsche MD&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 25,
                    &quot;promotionId&quot;: 6,
                    &quot;popularity&quot;: 82,
                    &quot;strength&quot;: 86,
                    &quot;skill&quot;: 87,
                    &quot;agility&quot;: 53,
                    &quot;stamina&quot;: 96,
                    &quot;attitude&quot;: 92,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;China&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Sonia Schiller Sr.&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;j&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 26,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 80,
                    &quot;strength&quot;: 68,
                    &quot;skill&quot;: 50,
                    &quot;agility&quot;: 88,
                    &quot;stamina&quot;: 64,
                    &quot;attitude&quot;: 60,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Mongolia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Amani Ruecker&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;o&quot;,
                    &quot;allegiance&quot;: &quot;FACE&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 1,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 57,
                    &quot;skill&quot;: 93,
                    &quot;agility&quot;: 60,
                    &quot;stamina&quot;: 68,
                    &quot;attitude&quot;: 62,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Karlie Boyer&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 27,
                    &quot;promotionId&quot;: 8,
                    &quot;popularity&quot;: 69,
                    &quot;strength&quot;: 85,
                    &quot;skill&quot;: 63,
                    &quot;agility&quot;: 87,
                    &quot;stamina&quot;: 99,
                    &quot;attitude&quot;: 64,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Kazakhstan&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Krystal Carroll&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;s&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;BOOKER&quot;,
                    &quot;territoryId&quot;: 28,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 93,
                    &quot;strength&quot;: 52,
                    &quot;skill&quot;: 59,
                    &quot;agility&quot;: 95,
                    &quot;stamina&quot;: 78,
                    &quot;attitude&quot;: 56,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Afghanistan&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Iran&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Turkey&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;Arabia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Egypt&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Prof. Thurman Collins&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 33,
                    &quot;promotionId&quot;: 3,
                    &quot;popularity&quot;: 63,
                    &quot;strength&quot;: 71,
                    &quot;skill&quot;: 56,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 57,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Nigeria&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Congo&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Viola Hilpert&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;p&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 35,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 65,
                    &quot;strength&quot;: 81,
                    &quot;skill&quot;: 86,
                    &quot;agility&quot;: 61,
                    &quot;stamina&quot;: 70,
                    &quot;attitude&quot;: 73,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Ethiopia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Morgan Heller Sr.&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;a&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 36,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 86,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 64,
                    &quot;agility&quot;: 51,
                    &quot;stamina&quot;: 59,
                    &quot;attitude&quot;: 85,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;South Africa&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;Madagascar&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;India&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Thailand&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 20,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Dr. Alvah Leffler DDS&quot;,
                    &quot;gender&quot;: &quot;N/A&quot;,
                    &quot;finisherName&quot;: &quot;y&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;MANAGER&quot;,
                    &quot;territoryId&quot;: 40,
                    &quot;promotionId&quot;: 9,
                    &quot;popularity&quot;: 92,
                    &quot;strength&quot;: 97,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 55,
                    &quot;stamina&quot;: 76,
                    &quot;attitude&quot;: 90,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 41,
            &quot;name&quot;: &quot;Philippines&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Shanie McClure&quot;,
                    &quot;gender&quot;: &quot;FEMALE&quot;,
                    &quot;finisherName&quot;: &quot;f&quot;,
                    &quot;allegiance&quot;: &quot;TWEENER&quot;,
                    &quot;role&quot;: &quot;REFEREE&quot;,
                    &quot;territoryId&quot;: 41,
                    &quot;promotionId&quot;: 4,
                    &quot;popularity&quot;: 56,
                    &quot;strength&quot;: 54,
                    &quot;skill&quot;: 70,
                    &quot;agility&quot;: 57,
                    &quot;stamina&quot;: 50,
                    &quot;attitude&quot;: 71,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        },
        {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Indonesia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Papua New Guinea&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;Australia&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;New Zealand&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: []
        },
        {
            &quot;id&quot;: 46,
            &quot;name&quot;: &quot;Antarctica&quot;,
            &quot;likes&quot;: null,
            &quot;dislikes&quot;: null,
            &quot;updatedAt&quot;: null,
            &quot;wrestlers&quot;: [
                {
                    &quot;id&quot;: 19,
                    &quot;createdAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;updatedAt&quot;: &quot;2026-06-01T07:18:50.000000Z&quot;,
                    &quot;name&quot;: &quot;Alfredo Trantow&quot;,
                    &quot;gender&quot;: &quot;MALE&quot;,
                    &quot;finisherName&quot;: &quot;g&quot;,
                    &quot;allegiance&quot;: &quot;HEEL&quot;,
                    &quot;role&quot;: &quot;WRESTLER&quot;,
                    &quot;territoryId&quot;: 46,
                    &quot;promotionId&quot;: 7,
                    &quot;popularity&quot;: 95,
                    &quot;strength&quot;: 63,
                    &quot;skill&quot;: 94,
                    &quot;agility&quot;: 67,
                    &quot;stamina&quot;: 83,
                    &quot;attitude&quot;: 86,
                    &quot;managerId&quot;: null,
                    &quot;partnerId&quot;: null,
                    &quot;storyFriendId&quot;: null,
                    &quot;storyEnemyId&quot;: null,
                    &quot;realFriendId&quot;: null,
                    &quot;realEnemyId&quot;: null
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-territories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-territories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-territories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-territories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-territories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-territories" data-method="GET"
      data-path="api/v1/territories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-territories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-territories"
                    onclick="tryItOut('GETapi-v1-territories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-territories"
                    onclick="cancelTryOut('GETapi-v1-territories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-territories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/territories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-territories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-territories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-territories--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-territories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/territories/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/territories/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-territories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Alaska&quot;,
        &quot;likes&quot;: null,
        &quot;dislikes&quot;: null,
        &quot;updatedAt&quot;: null,
        &quot;wrestlers&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-territories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-territories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-territories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-territories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-territories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-territories--id-" data-method="GET"
      data-path="api/v1/territories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-territories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-territories--id-"
                    onclick="tryItOut('GETapi-v1-territories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-territories--id-"
                    onclick="cancelTryOut('GETapi-v1-territories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-territories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/territories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-territories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-territories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-territories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the territory. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-events--event_id--wrestlers">Special POST function to assign wrestlers to event</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-events--event_id--wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/events/1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"wrestlerIds\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "wrestlerIds": [
        16
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-events--event_id--wrestlers">
</span>
<span id="execution-results-PUTapi-v1-events--event_id--wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-events--event_id--wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-events--event_id--wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-events--event_id--wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-events--event_id--wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-events--event_id--wrestlers" data-method="PUT"
      data-path="api/v1/events/{event_id}/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-events--event_id--wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-events--event_id--wrestlers"
                    onclick="tryItOut('PUTapi-v1-events--event_id--wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-events--event_id--wrestlers"
                    onclick="cancelTryOut('PUTapi-v1-events--event_id--wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-events--event_id--wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/events/{event_id}/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-events--event_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-events--event_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="PUTapi-v1-events--event_id--wrestlers"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>wrestlerIds</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="wrestlerIds[0]"                data-endpoint="PUTapi-v1-events--event_id--wrestlers"
               data-component="body">
        <input type="number" style="display: none"
               name="wrestlerIds[1]"                data-endpoint="PUTapi-v1-events--event_id--wrestlers"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the wrestlers table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-events--event_id--simulate">Special PATCH function to simulate an event
Modifies the is_winner and finish_type of the event_wrestler row</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-events--event_id--simulate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/events/1/simulate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"results\": [
        {
            \"wrestlerId\": 16,
            \"isWinner\": true,
            \"finishType\": \"TIMEOUT\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1/simulate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "results": [
        {
            "wrestlerId": 16,
            "isWinner": true,
            "finishType": "TIMEOUT"
        }
    ]
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-events--event_id--simulate">
</span>
<span id="execution-results-PATCHapi-v1-events--event_id--simulate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-events--event_id--simulate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-events--event_id--simulate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-events--event_id--simulate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-events--event_id--simulate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-events--event_id--simulate" data-method="PATCH"
      data-path="api/v1/events/{event_id}/simulate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-events--event_id--simulate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-events--event_id--simulate"
                    onclick="tryItOut('PATCHapi-v1-events--event_id--simulate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-events--event_id--simulate"
                    onclick="cancelTryOut('PATCHapi-v1-events--event_id--simulate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-events--event_id--simulate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/events/{event_id}/simulate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-events--event_id--simulate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-events--event_id--simulate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="PATCHapi-v1-events--event_id--simulate"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>results</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>wrestlerId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="results.0.wrestlerId"                data-endpoint="PATCHapi-v1-events--event_id--simulate"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the wrestlers table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>isWinner</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-v1-events--event_id--simulate" style="display: none">
            <input type="radio" name="results.0.isWinner"
                   value="true"
                   data-endpoint="PATCHapi-v1-events--event_id--simulate"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-events--event_id--simulate" style="display: none">
            <input type="radio" name="results.0.isWinner"
                   value="false"
                   data-endpoint="PATCHapi-v1-events--event_id--simulate"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>finishType</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="results.0.finishType"                data-endpoint="PATCHapi-v1-events--event_id--simulate"
               value="TIMEOUT"
               data-component="body">
    <br>
<p>Example: <code>TIMEOUT</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>UNFINISHED</code></li> <li><code>PIN</code></li> <li><code>SUBMISSION</code></li> <li><code>DISQUALIFICATION</code></li> <li><code>COUNTOUT</code></li> <li><code>TIMEOUT</code></li> <li><code>ELIMINATION</code></li> <li><code>SPECIAL</code></li></ul>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-v1-events--event_id--stipulations">Special POST function to assign stipulations to event</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-events--event_id--stipulations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/events/1/stipulations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"stipulationIds\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/events/1/stipulations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "stipulationIds": [
        16
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-events--event_id--stipulations">
</span>
<span id="execution-results-PUTapi-v1-events--event_id--stipulations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-events--event_id--stipulations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-events--event_id--stipulations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-events--event_id--stipulations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-events--event_id--stipulations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-events--event_id--stipulations" data-method="PUT"
      data-path="api/v1/events/{event_id}/stipulations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-events--event_id--stipulations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-events--event_id--stipulations"
                    onclick="tryItOut('PUTapi-v1-events--event_id--stipulations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-events--event_id--stipulations"
                    onclick="cancelTryOut('PUTapi-v1-events--event_id--stipulations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-events--event_id--stipulations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/events/{event_id}/stipulations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-events--event_id--stipulations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-events--event_id--stipulations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="PUTapi-v1-events--event_id--stipulations"
               value="1"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stipulationIds</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stipulationIds[0]"                data-endpoint="PUTapi-v1-events--event_id--stipulations"
               data-component="body">
        <input type="number" style="display: none"
               name="stipulationIds[1]"                data-endpoint="PUTapi-v1-events--event_id--stipulations"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the stipulations table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-v1-title_reigns--titleReign_id--wrestlers">Special POST function to assign wrestlers to a title reign.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-title_reigns--titleReign_id--wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/title_reigns/1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"wrestlerIds\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns/1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "wrestlerIds": [
        16
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-title_reigns--titleReign_id--wrestlers">
</span>
<span id="execution-results-PUTapi-v1-title_reigns--titleReign_id--wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-title_reigns--titleReign_id--wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-title_reigns--titleReign_id--wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-title_reigns--titleReign_id--wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-title_reigns--titleReign_id--wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-title_reigns--titleReign_id--wrestlers" data-method="PUT"
      data-path="api/v1/title_reigns/{titleReign_id}/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-title_reigns--titleReign_id--wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-title_reigns--titleReign_id--wrestlers"
                    onclick="tryItOut('PUTapi-v1-title_reigns--titleReign_id--wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-title_reigns--titleReign_id--wrestlers"
                    onclick="cancelTryOut('PUTapi-v1-title_reigns--titleReign_id--wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-title_reigns--titleReign_id--wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/title_reigns/{titleReign_id}/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-title_reigns--titleReign_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-title_reigns--titleReign_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>titleReign_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="titleReign_id"                data-endpoint="PUTapi-v1-title_reigns--titleReign_id--wrestlers"
               value="1"
               data-component="url">
    <br>
<p>The ID of the titleReign. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>wrestlerIds</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="wrestlerIds[0]"                data-endpoint="PUTapi-v1-title_reigns--titleReign_id--wrestlers"
               data-component="body">
        <input type="number" style="display: none"
               name="wrestlerIds[1]"                data-endpoint="PUTapi-v1-title_reigns--titleReign_id--wrestlers"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the wrestlers table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-title_reigns--titleReign_id--end">Special PATCH function to end a title reign
Updates the end dates</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-title_reigns--titleReign_id--end">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/title_reigns/1/end" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"yearEnd\": 16,
    \"monthEnd\": 4,
    \"weekEnd\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/title_reigns/1/end"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "yearEnd": 16,
    "monthEnd": 4,
    "weekEnd": 3
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-title_reigns--titleReign_id--end">
</span>
<span id="execution-results-PATCHapi-v1-title_reigns--titleReign_id--end" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-title_reigns--titleReign_id--end"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-title_reigns--titleReign_id--end"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-title_reigns--titleReign_id--end" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-title_reigns--titleReign_id--end">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-title_reigns--titleReign_id--end" data-method="PATCH"
      data-path="api/v1/title_reigns/{titleReign_id}/end"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-title_reigns--titleReign_id--end', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-title_reigns--titleReign_id--end"
                    onclick="tryItOut('PATCHapi-v1-title_reigns--titleReign_id--end');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-title_reigns--titleReign_id--end"
                    onclick="cancelTryOut('PATCHapi-v1-title_reigns--titleReign_id--end');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-title_reigns--titleReign_id--end"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/title_reigns/{titleReign_id}/end</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>titleReign_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="titleReign_id"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="1"
               data-component="url">
    <br>
<p>The ID of the titleReign. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearEnd"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthEnd"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekEnd"                data-endpoint="PATCHapi-v1-title_reigns--titleReign_id--end"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-v1-teams--team_id--wrestlers">Special POST function to assign wrestlers to a team.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-teams--team_id--wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/teams/1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"wrestlerIds\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "wrestlerIds": [
        16
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teams--team_id--wrestlers">
</span>
<span id="execution-results-PUTapi-v1-teams--team_id--wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teams--team_id--wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teams--team_id--wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teams--team_id--wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teams--team_id--wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teams--team_id--wrestlers" data-method="PUT"
      data-path="api/v1/teams/{team_id}/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teams--team_id--wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teams--team_id--wrestlers"
                    onclick="tryItOut('PUTapi-v1-teams--team_id--wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teams--team_id--wrestlers"
                    onclick="cancelTryOut('PUTapi-v1-teams--team_id--wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teams--team_id--wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teams/{team_id}/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teams--team_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teams--team_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="PUTapi-v1-teams--team_id--wrestlers"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>wrestlerIds</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="wrestlerIds[0]"                data-endpoint="PUTapi-v1-teams--team_id--wrestlers"
               data-component="body">
        <input type="number" style="display: none"
               name="wrestlerIds[1]"                data-endpoint="PUTapi-v1-teams--team_id--wrestlers"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the wrestlers table.</p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-teams--team_id--wrestlers">Special PUT function to add more wrestlers to a team.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-teams--team_id--wrestlers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/teams/1/wrestlers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"wrestlerIds\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1/wrestlers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "wrestlerIds": [
        16
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teams--team_id--wrestlers">
</span>
<span id="execution-results-POSTapi-v1-teams--team_id--wrestlers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teams--team_id--wrestlers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teams--team_id--wrestlers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teams--team_id--wrestlers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teams--team_id--wrestlers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teams--team_id--wrestlers" data-method="POST"
      data-path="api/v1/teams/{team_id}/wrestlers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teams--team_id--wrestlers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teams--team_id--wrestlers"
                    onclick="tryItOut('POSTapi-v1-teams--team_id--wrestlers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teams--team_id--wrestlers"
                    onclick="cancelTryOut('POSTapi-v1-teams--team_id--wrestlers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teams--team_id--wrestlers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teams/{team_id}/wrestlers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teams--team_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teams--team_id--wrestlers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="POSTapi-v1-teams--team_id--wrestlers"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>wrestlerIds</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="wrestlerIds[0]"                data-endpoint="POSTapi-v1-teams--team_id--wrestlers"
               data-component="body">
        <input type="number" style="display: none"
               name="wrestlerIds[1]"                data-endpoint="POSTapi-v1-teams--team_id--wrestlers"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the wrestlers table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-teams--team_id--end">Special PATCH function to end a title reign
Updates the end dates</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-teams--team_id--end">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/teams/1/end" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"yearEnd\": 16,
    \"monthEnd\": 4,
    \"weekEnd\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/teams/1/end"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "yearEnd": 16,
    "monthEnd": 4,
    "weekEnd": 3
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-teams--team_id--end">
</span>
<span id="execution-results-PATCHapi-v1-teams--team_id--end" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-teams--team_id--end"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-teams--team_id--end"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-teams--team_id--end" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-teams--team_id--end">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-teams--team_id--end" data-method="PATCH"
      data-path="api/v1/teams/{team_id}/end"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-teams--team_id--end', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-teams--team_id--end"
                    onclick="tryItOut('PATCHapi-v1-teams--team_id--end');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-teams--team_id--end"
                    onclick="cancelTryOut('PATCHapi-v1-teams--team_id--end');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-teams--team_id--end"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teams/{team_id}/end</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>yearEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="yearEnd"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>monthEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="monthEnd"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weekEnd</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weekEnd"                data-endpoint="PATCHapi-v1-teams--team_id--end"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 4. Example: <code>3</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
