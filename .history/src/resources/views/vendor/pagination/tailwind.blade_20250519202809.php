<ul class="Pagination">
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/1/">
            <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
        </a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/1/"><span>1</span></a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link isActive" href="/pages/2/"><span>2</span></a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/3/"><span>3</span></a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/4/"><span>4</span></a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/5/"><span>5</span></a>
    </li>
    <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/5/">
            <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </a>
    </li>
</ul>

.Pagination {
  display: flex;
  align-items: center;
}
.Pagination-Item-Link {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  overflow: hidden;
  background: #fff;
  border: solid 2px #111;
  font-size: 14px;
  color: #111;
  font-weight: bold;
  transition: all 0.15s linear;
}
.Pagination-Item-Link-Icon {
  width: 20px;
}
.Pagination-Item-Link.isActive {
  background: #111;
  color: #fff;
  pointer-events: none;
}
.Pagination-Item-Link:not(.isActive):hover {
  background: #111;
  color: #fff;
}
.Pagination > * + * {
  margin-left: 8px;
}