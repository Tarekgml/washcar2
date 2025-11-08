<header id="sec-8c55" style="position: fixed; width: 100%; top: 0; background: linear-gradient(135deg, #007bff 0%, #66afff 100%); clear: both; z-index: 9999; border-bottom-left-radius: 25px; border-bottom-right-radius: 25px; box-shadow: 0 2px 15px rgba(0,0,0,0.1); padding: 10px 0;">
  <div style="clear: both; display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="float: right;">
          <a href="{{ route('notification') }}" style="display: inline-block; background: rgba(255,255,255,0.2); padding: 10px; width: 40px; height: 40px; border-radius: 50%; color: white; transition: all 0.3s ease;">
              <i class="fas fa-bell" style="font-size: 24px;"></i>
          </a>
      </div>
      <div style="text-align: center;">
          <img alt="شعار الشركة" title="Home" src="hw.png" width="100px" style="height: auto; filter: drop-shadow(0 2px 5px rgba(0,0,0,0.2));">
      </div>
      <div style="float: left;">
          <a href="https://wa.me/message/LDJUUIIMAI7WC1" style="display: inline-block; background: rgba(255,255,255,0.2); padding: 10px; width: 40px; height: 40px; border-radius: 50%; color: white; transition: all 0.3s ease;">
              <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
          </a>
      </div>
  </div>
</header>

<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    /* Add margin to the main content to prevent header overlap */
    body {
        margin-top: 80px; /* Adjust this value based on your header height */
    }

    .floating-icon {
        position: fixed;
        right: 20px;
        bottom: 100px;
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, #007bff 0%, #66afff 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .floating-icon:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    header a:hover {
        background: rgba(255,255,255,0.3) !important;
        transform: translateY(-2px);
    }
</style>
