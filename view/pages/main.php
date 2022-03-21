<%- include("../../inc/header.ejs") %>
<%- include("../../inc/nav.html") %>
  <div class="content">
    <!-- Página a ser exibida -->
      <div class="row">
        <%- include(`${activePage}.ejs`) %>
      </div>
      <%- include("../../inc/copyright.html") %>
  </div>
  <%- include("../../inc/theme_selector.html") %>
  <%- include("../../inc/footer.ejs") %>