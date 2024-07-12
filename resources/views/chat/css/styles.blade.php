<style>
    .img-container {
        position: relative;
        display: inline-block;
        margin: 10px;
        background-size: cover;
        background-position: center;
        width: 150px;
        height: 150px;
        border: 2px solid #8e44ad;
        border-radius: 8px;
        cursor: pointer;
    }

    .img-container img {
        display: none;
    }

    .close-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #e74c3c;
        color: #FFFFFF;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        text-decoration: none;
        text-align: center;
        line-height: 25px;
        z-index: 10;
    }

    .img-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        background: rgba(0, 0, 0, 0.8);
        padding: 20px;
        text-align: center;
    }

    .img-popup img {
        max-width: 100%;
        max-height: 100%;
    }

    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        color: white;
        cursor: pointer;
    }

    .toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 10000;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .toast {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .toast.show {
        opacity: 1;
        transform: translateX(0);
    }

    .toast .close-btn {
        margin-left: auto;
        background: none;
        border: none;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<style>
    .form-control.chat_form {
        resize: none;
        overflow: hidden;
    }
</style>
<style>
    .dialog {
        position: absolute;
        display: none;
        border: 1px solid #ccc;
        background-color: #fff;
        z-index: 1000;
        resize: both;
        overflow: auto;
        right: 0;
        top: 50px;
        /* Adjust initial position as needed */
    }

    .dialog-maximized {
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;
        right: unset;
        transform: none;
        /* Ensure transform is reset */
    }

    #localVideo {
        width: 100%;
        height: 100%;
        transform: none;
        object-fit: cover;
    }

    .dialog-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #f1f1f1;
        border-bottom: 1px solid #ccc;
        cursor: move;
    }

    .dialog-title {
        font-size: 16px;
        font-weight: bold;
    }

    .dialog-controls {
        display: flex;
    }

    .dialog-btn {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 20px;
    }

    .dialog-body {
        padding: 10px;
    }
</style>