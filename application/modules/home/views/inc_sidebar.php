<?foreach($banners as $banner):?>
<a href="<?=$banner->url?>" target="_blank"><img src="<?=$banner->image?>" style="margin: 10px 0;"></a>
<?endforeach;?>

<img class="img-thumbnail pull-left" data-src="holder.js/340x150?text=สนใจโฆษณาตำแหน่งนี้ติดต่อ line2me.info@gmail.com (200 บาท/เดือน หรือเหมา 3 เดือนในราคา 500 บาท)" alt="สนใจโฆษณาตำแหน่งนี้ติดต่อ line2me.info@gmail.com (200 บาท/เดือน หรือเหมา 3 เดือนในราคา 500 บาท)" style="margin: 10px 0;">

<?if (!$this->agent->is_mobile()):?>

<div style="width:100%;" class="fb-page" data-href="https://www.facebook.com/addfriend.in.th/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/addfriend.in.th/"><a href="https://www.facebook.com/addfriend.in.th/">หาเพื่อน หาแฟน หากิ๊ก หาคู่ - Addfriend.in.th</a></blockquote></div></div>

<?else:?>

<div style="width:100%;" class="fb-page" data-href="https://www.facebook.com/addfriend.in.th" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/addfriend.in.th"><a href="https://www.facebook.com/addfriend.in.th">หาเพื่อน หาแฟน หากิ๊ก หาคู่ - Addfriend.in.th</a></blockquote></div></div>

<?endif;?>