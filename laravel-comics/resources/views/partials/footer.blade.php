<footer>
        <div>
            <nav>
                <div>
                    <h5>DC COMICS</h5>
                    <ul>
                        @foreach ($menuLinkFooterDcComincs as $element)
                        <li>
                            <a href="{{ $element['link']}}">{{ $element['name']}}</a>
                        
                        </li>
                        @endforeach
                    </ul>
                    
                    <h5>SHOP</h5>
                    <ul>
                    @foreach ( $menuLinkFooterShop as $element)
                        <li>
                            <a href="{{ $element['link']}}">{{ $element['name']}}</a>
                        
                        </li>
                        @endforeach
                   
                    </ul>
                </div>
                <div>
                    <H5>DC</H5>
                    <ul>
                    @foreach (  $menuLinkFooterDc as $element)
                        <li>
                            <a href="{{ $element['link']}}">{{ $element['name']}}</a>
                        
                        </li>
                        @endforeach
                    </ul>
                   
                </div>
                <div>
                    <H5>SITES</H5>
                    <ul>
                    @foreach (  $menuLinkFooterSites as $element)
                        <li>
                            <a href="{{ $element['link']}}">{{ $element['name']}}</a>
                        
                        </li>
                        @endforeach
                   
                    </ul>
                </div>
            </nav>
        </div>
        <div class="bg-grey">
            <div class="limitatore"> 
            <div>
           <button>SIGN-UP NOW!</button>
            </div>
            <div >
                <h3>FOLLOW US</h3>
                <ul>
                @foreach ($menuImageFooter as $element)
                    <li > 
                <figure>
                    <img src="{{ Vite::asset('resources/image/'. $element['image']) }}" alt="">
                </figure>
                    </li>
                @endforeach    
                </ul>
            </div>
        </div>
           
        </div>

    </footer>