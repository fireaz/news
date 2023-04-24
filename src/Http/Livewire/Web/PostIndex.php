<?php

namespace FireAZ\News\Http\Livewire\Web;

use FireAZ\News\Models\Post;
use FireAZ\Platform\Facades\Theme;
use FireAZ\Reojs\ArrayWireable;
use FireAZ\Reojs\Component;
use FireAZ\Seo\Facades\Seo;

class PostIndex extends Component
{
    public ArrayWireable $post;

    public function mount($slug)
    {
        $this->post = ArrayWireable::fromLivewire(Post::where('slug', $slug)->first());
        Theme::setTitle($this->post->title);
        Seo::SeoInfoTransformer(function (\FireAZ\Seo\SeoInfo $seo) {
            $seo->title = Theme::getTitle();
            // if ($urlImage)
            //     $seo->image = url($urlImage);
            $seo->description = $this->post->description ?? 'Free Online Tutorials - Collection of technical and non technical, Free tutorials and reference manuals with examples for Java8, XStream, Scrum, Guava, Memcached, Neo4J, CICS, Fortran, EasyMock, Object Oriented Analysis & Design, Tika, DOM, AngularJS, IMS-DB, NGN, Sed, WCF, JPA, Apache POI, Signals and Systems, JOGL, DB2, PhoneGap, SVG, VSAM, COBOL, XSD, XPath, Redis, Java XML, VBA, JFreeChart, Lucene, Selenium , DTD, Powerpoint, Tcl/Tk, XML, Software Engineering and many more latest technologies';
            $seo->keywords = $this->post->tags ?? 'Free, Online, Tutorials, Courses, XStream, Java8, Scrum, Guava, Memcached, Neo4J, CICS, EasyMock, Object, Oriented, Analysis, Design, Tika, AngularJS, IMS-DB, NGN, Sed, WCF, JPA, Apache POI, Signals and Systems, JOGL, DB2, PhoneGap, SVG, VSAM, COBOL, XSD, XPath, Redis, XSLT, Java XML, VBA, JFreeChart, Lucene, Selenium, DTD, Powerpoint, Tcl/tk, Software Engineering, XML, jQueryUI, QC, Latest, Technologies, Free,  Tutorials, References, Examples';
            return $seo;
        });
    }
    public function render()
    {
        return view('news::web.post');
    }
}
