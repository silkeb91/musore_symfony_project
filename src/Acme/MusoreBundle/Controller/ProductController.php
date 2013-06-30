<?php
namespace Acme\MusoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function indexAction(){
        /*$defaultData = array("genre", "geef je genre");
        $form = $this -> createFormBuilder($defaultData)
            -> add('genre', 'text')
            -> add('min-price', 'integer')
            -> add('max-price', 'integer')
            -> getForm();
        $form -> handleRequest($request);
        if($form -> isValid()){
            $data = $form -> getData();
            echo $data['genre'];
        }*/

        $em = $this -> getDoctrine() -> getManager();
        $spotlighted = $em -> getRepository('AcmeMusoreBundle:Album')->findAlbumsOrderedByReleaseDate(5);

        $newest = $em -> getRepository('AcmeMusoreBundle:Album')->findAlbumsOrderedByReleaseDate(5);
        return $this->render('AcmeMusoreBundle:Product:index_overview.html.twig',
                             array('spotlighted' => $spotlighted, 'newestAlbums' => $newest));
    }

    public function filterAction(Request $request){
        $defaultData = array("genre", "geef je genre");
        $form = $this -> createFormBuilder($defaultData)
            -> add('genre', 'text')
            -> add('min-price', 'integer')
            -> add('max-price', 'integer')
            -> getForm();
        $form -> handleRequest($request);
        if($form -> isValid()){
            $data = $form -> getData();
            echo $data['genre'];
        }

    }

    public function albumDetailAction($album_id, $currentSong){
        $em = $this -> getDoctrine() -> getManager();
        $album = $em -> getRepository('AcmeMusoreBundle:Album')->findAlbumById($album_id);
        if(!$album){
            throw $this->createNotFoundException('The Album does not exist');
        }
        $inCart = false;

        //Add vote functionality = /album/{id}/{currentSong}/{AddToCart} => toevoegen aan cart (session)
        //Dan redirect to album_detail -> zo wordt bij refresh product niet nogmaals toegevoegd
        //Session variabele controle (cart) als album in cart zit dan andere knop tonen (knop disabelen)
        return $this->render('AcmeMusoreBundle:Product:album_detail.html.twig',
                            array('album' => $album, 'current' => $currentSong, 'inCart' => $inCart));
    }

    public function songDetailAction($album_id, $song_id){
        $em = $this -> getDoctrine() -> getManager();
        $song = $em -> getRepository('AcmeMusoreBundle:Song')->findSingle($song_id);
        $other = $em -> getRepository('AcmeMusoreBundle:Album')-> findAlbumsByArtist($song -> getProduct() -> getArtist()-> getId());
        if(count($other) == 0){
            throw $this->createNotFoundException('No corresponding album found');
        }
        $album_name = $other[0] -> getProduct() -> getTitle();
        if($album_id != 0){
            foreach($other as $album){
                if($album_id == $album -> getId()){
                    $album_name = $album -> getProduct() -> getTitle();
                }
            }
        }


        return $this->render('AcmeMusoreBundle:Product:song_detail.html.twig',
            array('album' => $song, 'other' => $other, 'albumName' => $album_name));
    }

    public function genreOverviewAction($genre_id){
        $em = $this -> getDoctrine() -> getManager();
        $albums = $em -> getRepository('AcmeMusoreBundle:Album')->findAlbumsOfGenre($genre_id);
        $songs = $em -> getRepository('AcmeMusoreBundle:Song')->findSongsOfGenre($genre_id, 10);

        $genre = $em -> getRepository('AcmeMusoreBundle:Genre')->findOneById($genre_id);

        return $this->render('AcmeMusoreBundle:Product:genre_overview.html.twig',
            array('albums' => $albums, 'songs' => $songs, 'genre' => $genre));
    }

    /* public function albumDetailAction($album_id, $currentSong){
         $em = $this -> getDoctrine() -> getManager();
         $album = $em -> getRepository('AcmeMusoreBundle:Album')->findAlbumByIdWithAlbumTracks($album_id);
         return $this->render('AcmeMusoreBundle:Product:album_detail.html.twig',
             array('album' => $album, 'current' => $currentSong));
     }*/
}
